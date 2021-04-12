<footer class="bg-gray-100 pb-20 relative">
  <div class="p-10 lg:p-20 text-base lg:text-sm background-footer" style="background-image: url('<?php echo $path; ?>images/backgrounds/footer.svg');">
    <section class="flex flex-col space-y-5 lg:flex-row lg:space-y-0 lg:space-x-10">
      <section class="flex items-center">
        <h3 class="font-normal mr-2">Contact</h3>
        <a href="mailto:info@translatingnature.org" class="flex items-center hover:text-gray-400 h-9 lg:h-6 select-none"><span class="py-1 w-6"><?php print $icon_email; ?></span></a> </section>
      <section class="flex items-center">
        <h3 class="font-normal mr-2">Follow</h3>
        <a href="" class="flex items-center h-9 lg:h-6 hover:text-gray-400 select-none"><span class="py-1 w-6"><?php print $icon_twitter; ?></span></a> </section>
		<section class="flex items-center mb-5 lg:mb-10">
      <h3 class="font-normal mr-2">Mailing list</h3>
      <form class="flex h-6 items-stretch text-sm">
        <input type="email" name="email" placeholder="Email" class="leading-none outline-none font-light bg-white dark:text-black px-2 flex-grow">
        <button type="submit" class="whitespace-nowrap px-2 leading-none font-normal text-white bg-black hover:text-gray-400 outline-none focus:outline-none select-none">Sign up</button>
      </form>
    </section>
    </section>
    <section class="mt-10 lg:mt-30">
      <p class="font-extralight tracking-wide text-4xl">Building trans-species <br>
        communication systems <br>
        since 2005</p>
    </section>
  </div>
  <section class="px-10 lg:px-20 pt-10 lg:pt-5 border-t border-black text-xs">
    <ol class="flex flex-col sm:flex-row sm:space-x-5 leading-normal">
      <li>Load time: <span class="font-normal ">200ms</span></li>
      <li>CO<sub>2</sub> emitted: <span class="font-normal">20mg</span></li>
      <li>Built with: <a href="#" class="font-normal underline hover:bg-tn-key">Invisible Cape</a></li>
    </ol>
  </section>
</footer>
