<ol class="grid grid-cols-1">
  <?php $years = array_unique( array_column( $publications, 'date' )); foreach ($years as $year) { ?>
  <li class="border-t border-gray-200"> <span class="block text-xs font-bold uppercase tracking-widest mt-2"><?php echo $year; ?></span> 
<?php if ($year == "2017") { echo "asdasdas asdasd asdasd asdasdas asdasd asdasd asdasd"; } ?>	
	
	</li>
  <?php } ?>
</ol>
