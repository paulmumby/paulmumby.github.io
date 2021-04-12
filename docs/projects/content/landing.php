<div class="p-10 lg:pb-40">
  <ol class="lg:max-w-screen-md xl:max-w-screen-lg mx-auto grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 items-stretch">
    <?php foreach ($projects as $project )  { ?>
    <!--start item-->
    <li class="flex flex-col"><a href="<?php $link = strtolower(str_replace(' ', '-', $project)); echo $path."docs/projects/".$link.".php"; ?>" class="block h-full p-5 bg-gray-100 hover:bg-tn-key rounded-md"><span class="inline-block w-full h-auto"><?php print $figure_the_lake; ?></span><span class="inline-block w-full mt-5 text-sm font-bold leading-tight"><?php echo $project; ?></span><!--<span class="block text-xs leading-tight">2005</span>--><span class="block text-xs leading-tight">Site specific installation</span></span></a></li>
    <!--end item-->
    <?php } ?>
  </ol>
</div>
