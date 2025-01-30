<div class="xoo-el-scgen-cont">

	<h3>Shortcode Generator</h3>

	<div class="xoo-el-scgroup" data-attr="sctype">
		<label>Shortcode For: </label>
		<div>
			<label><input type="radio" data-fname="xoo-elscg-sctype" value="popup">Open Popup</label>
			<label><input type="radio" data-fname="xoo-elscg-sctype" value="inline">Inline Form</label>
		</div>	
	</div>


	<div class="xoo-elscg-shortcode">
		<span class="xoo-elscg-copy dashicons dashicons-admin-page"></span>
		<span class="xoo-elscg-sctext"></span>
		<span class="xoo-elscg-copy dashicons dashicons-admin-page"></span>
	</div>

	<div class="xoo-elscg-fields" data-type="inline">

		<div class="xoo-el-scgroup" data-attr="forms" data-multiple="yes">
			<label>Forms</label>
			<div>
				<label><input type="checkbox" data-fname="xoo-elscg-forms[]" value="login" checked>Login</label>
				<label><input type="checkbox" data-fname="xoo-elscg-forms[]" value="register" checked>Register</label>
			</div>
		</div>

		<div class="xoo-el-scgroup" data-attr="active">
			<label>Open Default Form</label>
			<div>
				<select data-fname="xoo-elscg-formdefault">
					<option value="login">Login</option>
					<option value="register">Register</option>
				</select>
			</div>		
		</div>


		<div class="xoo-el-scgroup" data-attr="pattern">
			<label>Form Pattern</label>
			<div>
				<select data-fname="xoo-elscg-formpattern">
					<option value="separate">Separate Forms</option>
					<option value="single">Single Field Form</option>
				</select>	
				<span class="xoo-el-scgdesc">Single pattern only shows one email field and then further navgiates to login/register form.</span>
			</div>	
		</div>


		<div class="xoo-el-scgroup" data-attr="navstyle">
			<label>Navigation Style</label>
			<div>
				<select data-fname="xoo-elscg-navstyle">
					<option value="tabs">Tabs</option>
					<option value="links">Bottom Links</option>
					<option value="disable">Disable</option>
				</select>	
				<span class="xoo-el-scgdesc">Choose a way to switch between login and registration form.</span>
			</div>	
		</div>

		<div class="xoo-el-scgroup xoo-el-scredirects" data-attr="login_redirect">
			<label>Login Redirect</label>
			<div>
				<select data-fname="xoo-elscg-loginred">
					<option value="global">Global Setting</option>
					<option value="same">Same Page</option>
					<option value="custom">Custom URL</option>
				</select>	
				<input type="text" data-fname="xoo-elscg-loginred" value="<?php echo get_site_url() ?>" data-showval="custom">
				<span class="xoo-el-scgdesc">Redirect link after login.<br>
					Global Setting refers to the option set under general -> redirect settings.
				</span>
			</div>	
		</div>


		<div class="xoo-el-scgroup xoo-el-scredirects" data-attr="register_redirect">
			<label>Register Redirect</label>
			<div>
				<select data-fname="xoo-elscg-regred">
					<option value="global">Global Setting</option>
					<option value="same">Same Page</option>
					<option value="custom">Custom URL</option>
				</select>	
				<input type="text" data-fname="xoo-elscg-regred" value="<?php echo get_site_url() ?>" data-showval="custom">
				<span class="xoo-el-scgdesc">Redirect link after register.<br>
					Global Setting refers to the option set under general -> redirect settings.
				</span>
			</div>	
		</div>

	</div>


	<div class="xoo-elscg-fields" data-type="popup">

		<div class="xoo-el-scgroup" data-attr="display">
			<label>Open popup using</label>
			<div>
				<select data-fname="xoo-elscg-poptype">
					<option value="link">Link</option>
					<option value="button">Button</option>
				</select>
			</div>	
		</div>


		<div class="xoo-el-scgroup" data-attr="text">
			<label>Text</label>
			<div>
				<input type="text" data-fname="xoo-elscg-poptxt" value="Login">
			</div>	
		</div>


		<div class="xoo-el-scgroup" data-attr="change_to">
			<label>After signing in, change link to</label>
			<div>
				<select data-fname="xoo-elscg-popchangeto">
					<option value="logout">Logout</option>
					<?php if( class_exists('woocommerce') ): ?><option value="myaccount" selected>My account</option><?php endif; ?>
					<option value="custom">Custom URL</option>
					<option value="hide">Hide</option>
				</select>	
				<input type="text" data-fname="xoo-elscg-popchangeto" value="<?php echo get_site_url() ?>" data-showval="custom">
				<span class="xoo-el-scgdesc">After signing in, the link should change into</span>
			</div>	
		</div>


		<div class="xoo-el-scgroup" data-attr="change_to_text">
			<label>After signing in, change text to</label>
			<div>
				<select data-fname="xoo-elscg-popchangetotxt">
					<option value="{firstname}">User's firstname</option>
					<option value="{lastname}">User's lastname</option>
					<option value="{username}">User's username</option>
					<option value="custom">Custom Text</option>
				</select>	
				<input type="text" data-fname="xoo-elscg-popchangetotxt" value="Hello {firstname}" data-showval="custom">
				<span class="xoo-el-scgdesc">
					After signing in, the link text should change into<br>
					Placeholders: {firstname} , {lastname}, {username}
				</span>
			</div>	
		</div>

		<div class="xoo-el-scgroup xoo-el-scredirects" data-attr="redirect_to">
			<label>Login/Register Redirect</label>
			<div>
				<select data-fname="xoo-elscg-popred">
					<option value="global">Global Setting</option>
					<option value="same">Same Page</option>
					<option value="custom">Custom URL</option>
				</select>	
				<input type="text" data-fname="xoo-elscg-popred" value="<?php echo get_site_url() ?>" data-showval="custom">
				<span class="xoo-el-scgdesc">Redirect link after login/register.<br>
					Global Setting refers to the option set under general -> redirect settings.
				</span>
			</div>	
		</div>


		<div class="xoo-el-scgroup" data-attr="type">
			<label>Open Default Form</label>
			<div>
				<select data-fname="xoo-elscg-poptype">
					<option value="login">Login</option>
					<option value="register">Register</option>
					<option value="lost-password">Lost Password</option>
				</select>

				<span class="xoo-el-scgdesc" style="display: none; color: red;">This will be ineffective as "Single Field Form" is selected under "General" tab. Change it to "Separate forms" for this to work.</span>

			</div>	
		</div>

		<span class="xoo-el-scpop-info">Apart from using a shortcode, there are other ways to open the popup.. Please check "info" tab.</span>
	</div>

</div>