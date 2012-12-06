<!-- <pre>
	<?php print_r($posts); ?>
</pre> -->
<div class="pgae-header">
	<h1>Listando as Postagens</h1>
</div>
<p>
	<?php echo $this->Html->link("Novo item", array('controller'=>'posts', 'action'=>'add'),array('class'=>'btn btn-success')); ?>
</p>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Código</th>
			<th>Título</th>
			<th>Texto</th>
			<th>Criado em</th>
			<th>Atualizado em</th>
			<th colspan="3">Ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($posts as $post): ?>
		<tr>
			<td><?php echo $post["Post"]["id"]; ?></td>
			<td><?php echo $post["Post"]["title"]; ?></td>
			<td><?php echo $post["Post"]["body"]; ?></td>
			<td><?php echo $post["Post"]["created"]; ?></td>
			<td><?php echo $post["Post"]["modified"]; ?></td>
			<td>
				<?php 
					echo $this->Html->link("Visualizar", array('controller' => 'posts','action' => 'view', $post["Post"]["id"]), 
					array('class'=>'btn btn-small'));
					//fazer pro edit e excluir
				?>	
			</td>
			<td>
				<?php 
					echo $this->Html->link("Editar", array('controller' => 'posts','action' => 'edit', $post["Post"]["id"]),
					array('class'=>'btn btn-info btn-small'));
					//fazer pro edit e excluir
				?>
			</td>
			<td>
				<?php 
					echo $this->Form->postLink("Excluir", array('controller' => 'posts','action' => 'delete', $post["Post"]["id"]),
					array('class'=>'btn btn-danger btn-small'));
					//fazer pro edit e excluir
				?>
			</td>
		</tr>
		
		<tr
		<?php endforeach; ?>
	</tbody>
</table>