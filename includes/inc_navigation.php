<nav class="bg-white w-full fixed z-50 top-0 left-0 items-center select-none h-auto lg:h-20">
  <header class="lg:absolute lg:left-0 lg:top-0 h-20 px-5 flex items-center"> <a href="" class="flex items-center text-xl leading-none font-bold"><span class="block w-9 h-9 flex-shrink-0 mr-3 logo" style="background-image: url('<?php echo $path; ?>images/logos/translating-nature-sprite.png');"></span>translating nature</a> </header>
  <!--start menu icon-->
  <input type="checkbox" id="nav--level-1--checkbox" class="nav--level-1--checkbox hidden select-none">
  <label for="nav--level-1--checkbox" class="block absolute top-0 right-0 w-20 h-20 p-2 select-none lg:hidden cursor-pointer"> <?php print $icon_menu; ?> </label>
  <!--end menu icon--> 
  <!-- start level 1-->
  <ol class="nav--level-1 bg-gray-100 lg:bg-transparent hidden w-full pb-40 lg:pb-0 lg:px-5 h-screen lg:h-20 flex flex-col lg:flex lg:flex-row lg:items-stretch lg:justify-end max-h-screen overflow-y-scroll scrollbar-hide lg:overflow-visible text-2xl lg:text-base font-normal leading-tight">
    <!--start projects-->
    <li class="flex flex-row flex-wrap nav--level-1--item"><a href="<?php echo $path; ?>docs/projects.php" class="flex flex-grow lg:self-stretch items-center p-5 group"><span class="lg:py-1 lg:px-2 lg:rounded-md lg:group-hover:bg-tn-key">Projects</span></a> 
      <!-- start level 2 --> 
      <!--start pointer-->
      <input type="checkbox" id="nav--level-2--item-1-checkbox" class="nav--level-2--checkbox hidden select-none">
      <label for="nav--level-2--item-1-checkbox" class="block w-20 p-2 lg:w-7 lg:p-0 lg:pt-0.5 lg:mr-2 xl:mr-4 select-none cursor-pointer lg:hidden"> <?php print $icon_pointer_down; ?> </label>
      <!--end pointer--> 
      <!--start list-->
      <div class="nav--level-2 w-full lg:bg-gray-100 hidden lg:hidden lg:absolute lg:-z-1 lg:left-0 lg:top-0 lg:pt-20 lg:pb-10">
        <ol class="flex flex-col text-lg lg:text-sm font-normal tracking-normal pb-5 pl-5 lg:p-20 lg:pt-10 lg:grid lg:grid-flow-col lg:grid-rows-7 lg:grid-cols-3 xl:grid-rows-5 xl:grid-cols-4 gap-0.5 lg:border-b border-black">
          <?php foreach ($projects as $project )  { ?>
          <!--start item-->
          <li class="flex items-center <?php $link = strtolower(str_replace(' ', '-', $project)); if (strtolower(str_replace(' ', '-', $content)) == $link) { echo "px-5 py-2 lg:p-1"; } ?>">
            <?php if (strtolower(str_replace(' ', '-', $content)) != $link) { ?>
            <a href="<?php echo $path."docs/projects/".$link.".php"; ?>" class="flex items-center w-full px-5 py-2 lg:p-1 group">
            <?php } ?>
            <span class="w-12 h-12 icon-line-current flex-shrink-0 mr-5 lg:mr-3"> <?php print $figure_the_lake; ?> </span><span class="lg:py-1 lg:px-2 lg:rounded-md lg:group-hover:bg-tn-key"><?php echo $project; ?></span>
            <?php if (strtolower(str_replace(' ', '-', $content)) != $link) { ?>
            </a>
            <?php } ?>
          </li>
          <!--end item-->
          <?php } ?>
        </ol>
      </div>
      <!--end list--> 
      <!-- end level 2 --> 
    </li>
    <!--end projects--> 
    <!--start research-->
    <li class="flex flex-row flex-wrap nav--level-1--item"><a href="<?php echo $path; ?>docs/research.php" class="flex flex-grow lg:self-stretch items-center p-5 group"><span class="lg:py-1 lg:px-2 lg:rounded-md lg:group-hover:bg-tn-key">Research</span></a> 
      <!--end research--> 
      <!--start archive-->
    <li class="flex flex-row flex-wrap nav--level-1--item"><a href="<?php echo $path; ?>docs/archive.php" class="flex flex-grow lg:self-stretch items-center p-5 group"><span class="lg:py-1 lg:px-2 lg:rounded-md lg:group-hover:bg-tn-key">Archive</span></a> 
      <!-- start level 2 --> 
      <!--start pointer-->
      <input type="checkbox" id="nav--level-2--item-3-checkbox" class="nav--level-2--checkbox hidden select-none">
      <label for="nav--level-2--item-3-checkbox" class="block w-20 p-2 lg:w-7 lg:p-0 lg:pt-0.5 lg:mr-2 xl:mr-4 select-none cursor-pointer lg:hidden"> <?php print $icon_pointer_down; ?> </label>
      <!--end pointer--> 
      <!--start list-->
      <div class="nav--level-2 w-full lg:bg-gray-100 hidden lg:hidden lg:absolute lg:-z-1 lg:left-0 lg:top-0 lg:pt-20 lg:pb-10">
          <ol class="flex flex-col font-normal lg:text-xl pb-5 pl-5 lg:p-20 lg:pt-10 lg:flex-row lg:items-center w-full lg:justify-center lg:space-y-0 lg:border-b border-black">
            <?php foreach ($directories as $directory )  { ?>
            <!--start item-->
            <li class="<?php $link = strtolower(str_replace(' ', '-', $directory)); if (strtolower(str_replace(' ', '-', $content)) == $link) { echo "px-5 py-2 lg:px-10"; } ?>">
              <?php if (strtolower(str_replace(' ', '-', $content)) != $link) { ?>
              <a href="<?php $link = strtolower(str_replace(' ', '-', $directory)); echo $path."docs/directory/".$link.".php"; ?>" class="flex px-5 py-2 lg:px-10 group">
              <?php } ?>
              <span class="lg:py-2 lg:px-4 rounded-md lg:group-hover:bg-tn-key"><?php echo $directory; ?></span>
              <?php if (strtolower(str_replace(' ', '-', $content)) != $link) { ?>
              </a>
              <?php } ?>
            </li>
            <!--end item-->
            <?php } ?>
          </ol>
      </div>
      <!--end list--> 
      <!-- end level 2 --> 
    </li>
    <!--end archive-->
    <li class="flex flex-row flex-wrap nav--level-1--item"><a href="<?php echo $path; ?>docs/settings.php" class="flex flex-grow lg:self-stretch items-center p-5 group"><span class="lg:py-1 lg:px-2 lg:rounded-md lg:group-hover:bg-tn-key">Settings</span></a> 
      <!-- start level 2 --> 
      <!--start pointer-->
      <input type="checkbox" id="nav--level-2--item-4-checkbox" class="nav--level-2--checkbox hidden select-none">
      <label for="nav--level-2--item-4-checkbox" class="block w-20 p-2 lg:w-7 lg:p-0 lg:pt-0.5 lg:mr-2 xl:mr-4 select-none cursor-pointer lg:hidden"> <?php print $icon_pointer_down; ?> </label>
      <!--end pointer--> 
      <!--start list-->
      <div class="nav--level-2 w-full lg:bg-gray-100 hidden lg:hidden lg:absolute lg:-z-1 lg:left-0 lg:top-0 lg:pt-20 lg:pb-10">
        <div class="flex flex-col lg:flex-row lg:items-baseline w-full lg:justify-center space-y-10 lg:space-y-0 lg:divide-x lg:divide-gray-300 px-10 pb-5 lg:p-20 lg:pt-10 lg:text-sm lg:border-b border-black"> 
          <!--start eco-->
          <section class="flex flex-col space-y-5 lg:space-y-3 lg:pr-20">
            <h4 class="font-bold text-xl lg:text-lg"><!--C0<sub>2</sub>-->Energy saving:<span class="leading-none text-xs inline-block w-7 h-7 cursor-pointer"><?php print $icon_info; ?></span></h4>
            <ol class="flex flex-col lg:flex-row lg:items-center space-y-5 lg:space-y-0 lg:space-x-5 font-light">
              <!--start item-->
              <li class="flex items-center flex-shrink-0">
                <label for="toggle-hi-res" class="toggle-label select-none flex-grow mr-2">Low-res images</label>
                <div class="relative inline-block w-12 lg:w-8 align-middle select-none">
                  <input type="checkbox" name="toggle-hi-res" id="toggle-hi-res" class="toggle-checkbox absolute block w-5 lg:w-3 h-5 lg:h-3 left-1 top-1 rounded-sm bg-gray-100 border border-black appearance-none outline-none cursor-pointer" checked="checked"/>
                  <label for="toggle-hi-res" class="toggle-background block overflow-hidden h-7 lg:h-5 border border-black bg-gray-100 rounded-sm cursor-pointer"></label>
                </div>
              </li>
              <!--end item--> 
              <!--start item-->
              <li class="flex items-center flex-shrink-0">
                <label for="toggle-grid-demand" class="toggle-label select-none flex-grow mr-2">Link to grid demand</label>
                <div class="relative inline-block w-12 lg:w-8 align-middle select-none">
                  <input type="checkbox" name="toggle-grid-demand" id="toggle-grid-demand" class="toggle-checkbox absolute block w-5 lg:w-3 h-5 lg:h-3 left-1 top-1 rounded-sm bg-gray-100 border border-black appearance-none outline-none cursor-pointer" checked="checked"/>
                  <label for="toggle-grid-demand" class="toggle-background block overflow-hidden h-7 lg:h-5 border border-black bg-gray-100 rounded-sm cursor-pointer"></label>
                </div>
              </li>
              <!--end item-->
            </ol>
          </section>
          <!--end eco--> 
          <!--start accessibility-->
          <section class="flex flex-col space-y-5 lg:space-y-3 lg:pl-20">
            <h4 class="font-bold text-xl lg:text-lg">Accessibility:</h4>
            <ol class="flex flex-col lg:flex-row lg:items-center space-y-5 lg:space-y-0 lg:space-x-5 font-light">
              <!--start item-->
              <li class="flex items-center flex-shrink-0 space-x-2">
                <label for="toggle-font-size" class="select-none flex-grow">Font size</label>
                <button name="toggle-font-size" id="toggle-font-size--smaller" class="block w-7 h-7 lg:w-5 lg:h-5 border border-black bg-gray-100 rounded-sm hover:bg-tn-key select-none focus:outline-none mr-2"><?php print $icon_minus; ?></button>
                <button name="toggle-font-size" id="toggle-font-size--larger" class="block w-7 h-7 lg:w-5 lg:h-5 border border-black bg-gray-100 rounded-sm hover:bg-tn-key select-none focus:outline-none"><?php print $icon_plus; ?></button>
              </li>
              <!--end item--> 
              <!--start item-->
              <li class="flex items-center flex-shrink-0">
                <label for="toggle-dark-mode" class="toggle-label select-none flex-grow mr-2">Dark mode</label>
                <div class="relative inline-block w-12 lg:w-8 align-middle select-none">
                  <input type="checkbox" name="toggle-dark-mode" id="toggle-dark-mode" class="toggle-checkbox absolute block w-5 lg:w-3 h-5 lg:h-3 left-1 top-1 rounded-sm bg-gray-100 border border-black appearance-none outline-none cursor-pointer"/>
                  <label for="toggle-dark-mode" class="toggle-background block overflow-hidden h-7 lg:h-5 border border-black bg-gray-100 rounded-sm cursor-pointer"></label>
                </div>
              </li>
              <!--end item-->
            </ol>
          </section>
          <!--end accessibility--> 
        </div>
      </div>
      <!--end list--> 
      <!-- end level 2 --> 
    </li>
  </ol>
  <!-- end level 1 --> 
</nav>
