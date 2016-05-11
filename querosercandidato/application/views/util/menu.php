<div class="navbar">
	<div class="navbar-inner">
		<ul class="nav">
			{menu_item}
			<li><a href="{url}" data-toggle="tooltip"
				data-placement="right" title="{descricao}" rel="tooltip" target="central" >{titulo}</a>
			</li> {/menu_item}
			<li><a href="{base_url}admin/logout" data-toggle="tooltip"
				data-placement="right" title="Logout do sistema" rel="tooltip" target="_parent"> Sair
			</a></li>
		</ul>
	</div>
</div>
<script>
	$(function() {
		$('[rel=tooltip]').tooltip() 
	}); 
</script>

