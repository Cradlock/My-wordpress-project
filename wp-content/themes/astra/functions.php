<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.8.10' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_THEME_ORG_VERSION', file_exists( ASTRA_THEME_DIR . 'inc/w-org-version.php' ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.8.9' );

/**
 * Load in-house compatibility.
 */
if ( ASTRA_THEME_ORG_VERSION ) {
	require_once ASTRA_THEME_DIR . 'inc/w-org-version.php';
}

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_PRO_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( 'https://wpastra.com/pricing/', 'dashboard', 'free-theme', 'dashboard' ) : 'https://woocommerce.com/products/astra-pro/' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', ASTRA_THEME_ORG_VERSION ? astra_get_pro_url( 'https://wpastra.com/pricing/', 'customizer', 'free-theme', 'upgrade' ) : 'https://woocommerce.com/products/astra-pro/' );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/lib/docs/class-astra-docs-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

// Enable NPS Survey only if the starter templates version is < 4.3.7 or > 4.4.4 to prevent fatal error.
if ( ! defined( 'ASTRA_SITES_VER' ) || version_compare( ASTRA_SITES_VER, '4.3.7', '<' ) || version_compare( ASTRA_SITES_VER, '4.4.4', '>' ) ) {
	// NPS Survey Integration
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-notice.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/class-astra-nps-survey.php';
}

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/surecart/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


function get_custom_users() {
    global $wpdb;
  
	$user = wp_get_current_user();
	
	
	if($user->exists()){
		if(current_user_can('administrator')){
  
			$result = $wpdb->get_results(
				"SELECT * FROM `Skills` "
			);	
    ?>
      
	  <style>
         .out_box{
            width: 100vw;
			height: 95vh;
			display: flex;
			align-items: center;
			justify-content: center;

		 }
		 .in_box{
			margin: 0;
            width: 100%;
			max-width: 800px;
			height: fit-content;
			display: flex;
			flex-direction: column;
			padding: 25px;
			border-radius: 25px;
			background: white; 
		 }
		 .in_box_user{
			display: flex;
			flex-direction: column;
			gap: 15px;
			border-bottom: 2px solid gray;
			padding-bottom: 10px;
		 }
		
		 .in_box_skills{
			display: flex;
			flex-wrap: wrap;
		 }

		 .list_skill{
            width: 60%;
			height: 350px;
		    border: 1px solid gray;
			overflow-y: auto; 
		 }
		 .skill{
		    min-height: 20px;
			height: fit-content;
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			justify-content: center;
			border: 1px solid black;
            padding: 15px 0 5px 15px;
		 }

		 .skill div{
			display: flex;
			
		 }
		 .skill p{
			margin: 0;
		 }
		 .skill h1{
			font-size: 25px;
		    margin: 0;
			padding: 0; 
		}
		.skill button{
			margin: 0 0 0 10px;
			padding: 5px 10px 5px 10px;
			font-size: 13px;
			height: 26px;
			border-radius: 10px;
		}
        
		

		.delete_btn{
            background: transparent;
			border: 1px solid red;
			color: red;
		}
		.delete_btn:hover{
			transition: 0.5s ease;
			background: red;
			border:0;
			color: black;
		}
		.skill a button:hover{
			transition: 0.5s ease;
			background: white;
			color: black;
		}
		
		 

		 .create_skill{
	        width: 25%;
			min-width: 300px;
			height: 350px;
			border: 1px solid gray;
			display: flex;
			flex-direction: column;
			align-items: center;
			padding: 20px;
		 }
		 .create_skill input{
			width: 95%;
			margin: 5px;
            height: 30px;
			padding-bottom: 25px;
		 }


		 @media (max-width:800px) {
		   .in_box_skills div{
			  width:100%;
		   }
		   .in_box{
              overflow-y: auto;
			  border-radius: 0;
			}
		 }
		 .EditCover{
			width: 100vw;
			height: 95vh;
			position: absolute;
			background: rgba(0,0,0,0.5);
			z-index: 2;
            top:0;
			right: 0;
			left:0;
			display: none;
			align-items: center;			
			justify-content: center;
		 }
		 .EditModal{
			padding: 10px;
            width: 100%;
			max-width: 500px;
			display: flex;
			flex-direction: column;
			background: white;
			align-items: center;			
            border-radius: 25px; 
		 }
		 .EditModal .Edit form {
			display: flex;
			flex-direction: column;
			row-gap: 15px;
		 }
		 .EditModal .Edit form input {
			width: 100%;
			border: 1px solid rgb(52, 51, 51);
		 }
		 .EditModal .Edit form textarea {
		    width: 100%;
			height: 250px;
		}

		 .ExitModal{
			width: 100%;
			display: flex;
			align-items: flex-start;
			justify-content: flex-end;
		 }
		 .ExitModal button{
			color: black;
			background: white;
			border-radius: 100%;
			padding: 5px 9px;
			border: 1px solid grey;
			transition: all .5s;
		 }
		 .ExitModal button:hover {
			color: red;
			border-color: red;
		 }
		 .Edit__submit {
			width: fit-content;
			display: block;
			margin-left: auto;
			border:0;
		 }

 
	  </style>

	  <div class="out_box">
        
        <div class="in_box">
			<div id="errors" hidden> 
                 None 
			</div>
            <div class="in_box_user"> 

                  <?php 
						echo " <span>Email: " . $user->user_email ."</span>";
						echo " <span>Login: " . $user->user_login ."</span>";
				  ?>
			     
		    </div>
	        
			<div class="in_box_skills"> 
				 <div class="create_skill"> 
					 <form method="POST" enctype="multipart/form-data"> 
						<input type="text" name="title" placeholder="title..." >
						<input type="url" name="link" placeholder="url..." >
						<input type="file" name="image" >
						<textarea type="text" name="desc" placeholder="description..."	></textarea>
 
						<input type="submit" name="new_skill_file" value="+Add">
					 </form>
				 </div>

				 <div class="list_skill"> 
                    <?php 
					    foreach($result as  $var){
							
							$title = htmlspecialchars($var->title, ENT_QUOTES);
                            $desc = htmlspecialchars($var->description, ENT_QUOTES);
                            $link = htmlspecialchars($var->link, ENT_QUOTES);
                            $img_path = htmlspecialchars($var->img_path, ENT_QUOTES);
							
							echo "<div class='skill'>";
                            echo "<h1>$var->title</h1>";
                            echo "<p>$var->description<p>";

							echo "<div> <a href='$var->link'><button>Watch</button> </a> 
							   
							        <button onclick='OpenEditModal($var->id, 
									                             \"$title\" , 
									                             \"$desc\" , 
																 \"$link\" , 
																 \"$img_path\"
																 )' class='edit_btn'>
																 Edit
																 
																 </button> 
                           
								<form method='POST' >
								    <input type='hidden' name='delete_skill' value='$var->id'>
								    <button type='submit' class='delete_btn'>delete</button> 
							    </form>
								</div>";
							echo "</div>";
						}
					?>

					<div class="EditCover" >
                            <div class="EditModal">
					              <div class="ExitModal">  <button onclick='ExitEditModal()' style='font-size: 16px;'>&times;</button></div>
								  <div class="Edit">
									<form method="post" id="EditForm"  enctype="multipart/form-data">
							                <input type="hidden" name="skill_id" id="skill_id">    
							                <input type="hidden" name="skill_img" id="skill_img">    
										    <input type='text' name='title' value='' id="ed_title">
				                 		    <input type='url' name='link'  value='' id="ed_link">
				                 		    <textarea type='text' name='desc'  value='' id="ed_desc"> 

											</textarea>
					                	    <input type='file' name='image' >
									    
									    	<input type="submit" class='Edit__submit' name="edit_button" value="Save change">
									</form>
								  </div>
						    </div>
					</div>
					<script> 
						function OpenEditModal(id,title,desc,link,img){
                              document.querySelector(".EditCover").style.display = "flex";
							  document.getElementById("skill_id").value = id;
							  document.getElementById("skill_img").value = img;
                              document.getElementById("ed_title").value = title;
                              document.getElementById("ed_link").value = link;
                              document.getElementById("ed_desc").value = desc;
						}
						function ExitEditModal(){
							document.querySelector(".EditCover").style.display = "none";
						}
					</script>
				 </div>
		    </div>
		
		</div>
      
	   </div>

    
	<?php
        
		
		}
	}
}

add_shortcode('display_user', 'get_custom_users');

function handle_new_skill_file(){
   
   if(isset($_POST["new_skill_file"])){
       global $wpdb;

	   $title = $_POST["title"];
	   $url = $_POST["link"];
	   $desc = $_POST["desc"];
       $img_name = '';

	   if(isset($_FILES["image"])){
            
			$upload_dir = wp_upload_dir();
            $upload_path = $upload_dir['basedir'] . MEDIA_PATH;
			$upload_url = $upload_dir["baseurl"] . MEDIA_PATH;

			$file_name = $_FILES["image"]["name"];
			$file_path = $upload_path . '/' . $file_name;

			if (file_exists($file_path)) {
				$file_name = time() . '-' . $file_name;  
				$file_path = $upload_path . '/' . $file_name;
			}
            
			move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);

			$img_name = $file_name;
	   }


	  
       
	   $table_name = "skills";
     
	   $inserted = $wpdb->insert(
		$table_name,
		[
			"title" => $title,
			"description" => $desc,
			"img_path" => $img_name,
			"link" => $url,
			
		]
	    );

   }
}

add_action("init","handle_new_skill_file");


function handle_delete_skill(){
	
	if(isset($_POST["delete_skill"])){
        global $wpdb;
        
		$sk_id = intval($_POST["delete_skill"]);

		$table_name = "skills";
		$is_del = $wpdb->delete(
			$table_name,
			['id' => $sk_id],
			['%d']
		);
        
	
	}
}

add_action("init","handle_delete_skill");


function handle_edit_skill(){
   if(isset($_POST["edit_button"])){
	global $wpdb;
    
	$n_id = $_POST["skill_id"];
	$n_title = $_POST["title"];
	$n_desc = $_POST["desc"];
	$n_link = $_POST["link"];  
	$img_name = $_POST["skill_img"];

	if(isset($_FILES["image"])){
            
			$upload_dir = wp_upload_dir();
            $upload_path = $upload_dir['basedir'] . MEDIA_PATH;
			$upload_url = $upload_dir["baseurl"] . MEDIA_PATH;

			$file_name = $_FILES["image"]["name"];
			$file_path = $upload_path . '/' . $file_name;

			if (file_exists($file_path)) {
				$file_name = time() . '-' . $file_name;  
				$file_path = $upload_path . '/' . $file_name;
			}
            
			move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);

			$img_name = $file_name;
	}

	$table_name = "skills";
	$update = $wpdb->update(
        $table_name,
		[
			'title' => $n_title,
			'link' => $n_link,
			'description' => $n_desc,
			'img_path' => $img_name
		],
		["id" => $n_id],
		["%s","%s","%s"],
		["%d"]
	);

	
   
   }
  
}

add_action("init","handle_edit_skill");


define("MEDIA_PATH","/media/");



function get_skills(){
	global $wpdb;

	$skills = $wpdb->get_results("SELECT * FROM `skills`");
	?>
      <style> 
          .carousel_skills{
			width: 100vw;
			height: fit-content;
			overflow-x: auto;
			display: flex;
			justify-content: center;
			margin: 0;
			padding: 0;

		  }
		  .skill{
			width: 300px;
			min-height: 300px;
			padding: 10px;
            margin: 20px;
			background: white;
			display: flex;
			flex-direction: column;
			align-items: center;
			border: 1px solid black;
			border-radius: 20px;
		  }
		  .skill h1{
			font-size: 25px;
			color: black;
		  }
		  .skill a{
			text-decoration: none; 

		  }
		  .skill_desc{
			height: 250px;
			overflow-y: auto;
			color: black;

		  }
		  .skill img{
			width: 240px;
			height: 250px;
			border-bottom: 1px solid black;
		  }

	  </style>
	<?php
	echo "<div class='carousel_skills'>";

	foreach($skills as $key => $var){
        ?>
            <div class="skill">
                <img src="
				    <?php 
					    echo get_site_url() . "/wp-content/uploads" . MEDIA_PATH .  $var->img_path;
					?>
				">
                
				<a href="
				   <?php 
				      echo "$var->link";  
				   ?>
				">
				<h1>
					<?php  echo "$var->title"; ?>
				</h1>
				</a>
				
				<div class="skill_desc">
				<p>
				   <?php  echo "$var->description"; ?>
				</p>
                </div> 
			</div>
		<?php
	}
	echo "</div>";
}

add_shortcode("CUSTOM_get_skills","get_skills");
