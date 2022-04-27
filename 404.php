<?php get_header(); ?>

    <div class="breadcrum flex items-center justify-center min-h44 h-40 md:h-44 px-8 bg-secondary">
        <div class="title text-center">
            <h1 class="breadcrumb md:text-6xl">Error</h1>
        </div>
    </div>

	<div class="enquiry py-5">
        <div class="cont">
            <div class="lg:grid grid-cols-2 gap-x-10 sm:px-6 ">
				<div class="w-full flex justify-center items-center py-8">
					<div class="overflow-hidden w-full h-full">
						<img src="<?php $uploads = wp_upload_dir();?><?php echo $uploads['baseurl'].'/2021/03';?>/404.jpg" alt="" class="md:w-full h-auto">
					</div>
				</div>

			    <div class="p-5 py-8 flex items-center">
					<div class="px-2 font-bold text-center items-center flex flex-col justify-center">
						<h2 class="uppercase text-primary md:text-6xl">oops<span class="text-secondary">!</span></h2>
						<h4 class=" md:text-3xl">We can't seem to find the page you're looking for</h4>
				    </div>	 
		    	</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>