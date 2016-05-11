<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Classe trata pagamento
 * @author salustiano *
 *
 */
class Pagamento extends CI_Controller {


    /**
     * @var array $candidato dados do candidato 
     */
    protected $candidato;

    /**
     * @var array prepara dados para as views
     */
    protected $data = array();

    /**
     * @var integer $apiKey chave do IUGU
     */
    protected $apiKey;

    /**
     * @var integer armazena o valor a ser cobrado
     */
    private $valor;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_util');
        $this->apiKey = '2e3eaa85d203c4ae9c004bd75c7c9ef9'; // api de producao
      //  $this->apiKey = 'e924a5e6384e5e81e94f5b2913e4feab'; // api de teste
        Iugu::setApiKey($this->apiKey);
    }

    /**
     *
     * Recebe os dados do formulário de pagamento de cartão via post, envia a cobrança para o IUGU
     *
     */
    public function cartao() {

        $this->data = $this->input->post();

        $this->candidato = $this->Model_util->getCadastroHASH($this->data['doc']);
   
        $this->valor = 250;

        if ($this->candidato['tb_tipo_cargo_id'] == 1) {
            $this->valor = 750;
        }
        
        $result = Iugu_Charge::create(
            array(
                'token' => $this->data['token'],
                'email' => $this->candidato['email'],
                'items' =>
                array(
                    array(
                        'description' => 'Pagamento para taxa de inscrição como candidato a '.$this->candidato['tipo_cargo'],
                        'quantity' => '1',
                        'price_cents' => $this->valor * 100,
                        )
                    ),
                'payer' =>
                array(
                    'name' => $this->candidato['nome'],
                    'cpf_cnpj' => $this->candidato['cpf'],
                    'email' => $this->candidato['email'],
                    )
                )
            );

        $this->data['base_url'] = base_url();

        $this->data['mensagem'] = 'pagamento não autorizado para o cartão utilizado. Tente novamente';
        $this->data['texto_link'] = 'Efetuar pagamento novamente';
        $this->data['form_url'] = 'login/go';
        $status_cadastro = 1;
        $status_pagamento = 3;

        if ($result->message == 'Autorizado') {
            $this->data['mensagem'] = 'Pagamento realizado com sucesso';
            $this->data['texto_link'] = 'Continue o processo de seleção';
            $this->data['form_url'] = 'questionario/go/'.$this->candidato['code'];
            $status_pagamento = 1;
            $status_cadastro = 2;

            $this->load->library('ctrlemail');

          //  $this->ctrlemail->pagamento($this->candidato['nome'], $this->candidato['code'], $this->candidato['email']);

        }

        $campos = array(
            'tb_status_pagamento_id' => $status_pagamento,
            'tb_tipo_pagamento_id' => 1,
            'tb_status_cadastro_id' => $status_cadastro,
            'invoice_id' => $result->invoice_id
            );

        $this->Model_util->setTableData("tb_cadastro"); 
        $this->Model_util->setid($this->data['doc'],"code");
        $this->Model_util->setData($campos);
        $this->Model_util->save();

        $this->parser->parse('status_pagamento', $this->data);
    }

    /**
     *
     * Envia dados para gerar boleto via IUGU
     *
     * @param string $cargo pode ser 'prefeito' ou 'vereador'
     *
    */
    public function boleto($doc) {

        $this->candidato = $this->Model_util->getCadastroHASH($doc);
        

        if (isset($this->candidato['invoice_id'])) {

            $statusFatura = Iugu_Invoice::fetch($this->candidato['invoice_id']);

            $vencimentoFatura = new Datetime($statusFatura->due_date);
            $dataAtual = new Datetime(date('Y-m-d'));

            if (($vencimentoFatura > $dataAtual) && $statusFatura->status == 'pending' && isset($statusFatura->bank_slip)) {
                redirect($statusFatura->secure_url);
                return void;
            }
        }

        $this->valor = 750;

        if ($this->candidato['tipo_cargo'] == 'Vereador') {
            $this->valor = 250;
        }
        
        echo $this->valor ;

        $result = Iugu_Charge::create(
            array(
                'method' => 'bank_slip',
                'email' => $this->candidato['email'],
                'items' =>
                array(
                    array(
                        'description' => 'Pagamento para taxa de inscrição como candidato a '.$this->candidato['tipo_cargo'],
                        'quantity' => '1',
                        'price_cents' => $this->valor * 100,
                        )
                    ),
                'payer' =>
                array(
                    'name' => $this->candidato['nome'],
                    'cpf_cnpj' => $this->candidato['cpf'],
                    'email' => $this->candidato['email'],
                    )
                )
            );

        $campos = array(
            'tb_status_pagamento_id' => 2,
            'tb_tipo_pagamento_id' => 2,
            'invoice_id' => $result->invoice_id
            );

        $this->Model_util->setTableData("tb_cadastro"); 
        $this->Model_util->setId($this->candidato['id']);
        $this->Model_util->setData($campos);
        $this->Model_util->save();

        redirect($result->url);
    }

    public function boletoPendente() {

        $this->candidato = $this->Model_util->getCadastro($this->data['doc']);

        $this->data['base_url'] = base_url();

        $this->parser->parse('status_pagamento', $this->data);

    }

    public function cancelaBoleto($doc) {

        $this->candidato = $this->Model_util->getCadastro($doc);

        Iugu_Invoice::fetch($this->candidato['invoice_id'])->cancel();

        $campos = array(
            'tb_status_pagamento_id' => 0,
            'tb_tipo_pagamento_id' => 2
        );

        $this->Model_util->setTableData("tb_cadastro");
        $this->Model_util->setId($this->candidato['id']);
        $this->Model_util->setData($campos);
        $this->Model_util->save();

        $this->session->set_flashdata('doc', $doc);
        $this->session->set_flashdata('cargo_id', $this->candidato['tb_tipo_cargo_id']);
        redirect('/login/go');

    }

    public function atualizaStatusPagamento() {

        $novoStatus = $this->input->post();
        
        if ($novoStatus['event'] == 'invoice.status_changed' && $novoStatus['data']['status'] == 'paid') {

            $this->Model_util->setTableData("tb_cadastro"); 
            $this->Model_util->setId($novoStatus['data']['id'], 'invoice_id');
            $this->Model_util->setData(array(
                'tb_status_pagamento_id' => 1
//				,
//               'tb_status_cadastro_id' => 2,
                )
            );

            $this->Model_util->save();

            $cadastro = $this->Model_util->getCadastroInvoiceID($novoStatus['data']['id']);

            $this->load->library('ctrlemail');

            $this->ctrlemail->pagamento($cadastro['nome'], $cadastro['code'], $cadastro['email']);
        }
    }
}
