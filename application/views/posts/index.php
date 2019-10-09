<?php $this->load->view('header.php');?>

<body class="page-has-left-panels page-has-right-panels">



<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar">
	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left">

		<a href="<?php echo base_url();?>" class="logo">
			<div class="img-wrap">
				<img src="<?php echo base_url('assets/images/logo.png')?>" alt="Olympus">
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-menu-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="OPEN MENU"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-menu-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="03-Newsfeed.html">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="16-FavPagesFeed.html">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-star-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="17-FriendGroups.html">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="18-MusicAndPlaylists.html">
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-headphones-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="19-WeatherWidget.html">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-weather-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-calendar-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="24-CommunityBadges.html">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-badge-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="25-FriendsBirthday.html">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-cupcake-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="26-Statistics.html">
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-stats-icon')?>"></use></svg>
					</a>
				</li>
				<li>
					<a href="27-ManageWidgets.html">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon')?>"></use></svg>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
		<a href="02-ProfilePage.html" class="logo">
			<div class="img-wrap">
				<img src="<?php echo base_url('assets/images/logo.png')?>" alt="Olympus">
			</div>
			<div class="title-block">
				<h6 class="logo-title">olympus</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="03-Newsfeed.html">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon')?>"></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="16-FavPagesFeed.html">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-star-icon')?>"></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="17-FriendGroups.html">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon')?>"></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="18-MusicAndPlaylists.html">
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-headphones-icon')?>"></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="19-WeatherWidget.html">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-weather-icon')?>"></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="20-CalendarAndEvents-MonthlyCalendar.html">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-calendar-icon')?>"></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="24-CommunityBadges.html">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-badge-icon')?>"></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="25-FriendsBirthday.html">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-cupcake-icon')?>"></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="26-Statistics.html">
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-stats-icon')?>"></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="27-ManageWidgets.html">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon')?>"></use></svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="profile-completion">

				<div class="skills-item">
					<div class="skills-item-info">
						<span class="skills-item-title">Profile Completion</span>
						<span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="76" data-from="0"></span><span class="units">76%</span></span>
					</div>
					<div class="skills-item-meter">
						<span class="skills-item-meter-active bg-primary" style="width: 76%"></span>
					</div>
				</div>

				<span>Complete <a href="#">your profile</a> so people can know more about you!</span>

			</div>
		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Left -->

<div class="fixed-sidebar fixed-sidebar-responsive">

	<div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
		<a href="#" class="logo js-sidebar-open">
			<img src="<?php echo base_url('assets/images/logo.png')?>" alt="Olympus">
		</a>

	</div>

	<div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
		<a href="#" class="logo">
			<div class="img-wrap">
				<img src="<?php echo base_url('assets/images/logo.png')?>" alt="Olympus">
			</div>
			<div class="title-block">
				<h6 class="logo-title">olympus</h6>
			</div>
		</a>

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="control-block">
				<div class="author-page author vcard inline-items">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/author-page.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
					<a href="02-ProfilePage.html" class="author-name fn">
						<div class="author-title">
							James Spiegel <svg class="olymp-dropdown-arrow-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon')?>"></use></svg>
						</div>
						<span class="author-subtitle">SPACE COWBOY</span>
					</a>
				</div>
			</div>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">MAIN SECTIONS</h6>
			</div>

			<ul class="left-menu">
				<li>
					<a href="#" class="js-sidebar-open">
						<svg class="olymp-close-icon left-menu-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
						<span class="left-menu-title">Collapse Menu</span>
					</a>
				</li>
				<li>
					<a href="mobile-index.html">
						<svg class="olymp-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right"   data-original-title="NEWSFEED"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-newsfeed-icon')?>"></use></svg>
						<span class="left-menu-title">Newsfeed</span>
					</a>
				</li>
				<li>
					<a href="Mobile-28-YourAccount-PersonalInformation.html">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-star-icon')?>"></use></svg>
						<span class="left-menu-title">Fav Pages Feed</span>
					</a>
				</li>
				<li>
					<a href="mobile-29-YourAccount-AccountSettings.html">
						<svg class="olymp-happy-faces-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FRIEND GROUPS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-faces-icon')?>"></use></svg>
						<span class="left-menu-title">Friend Groups</span>
					</a>
				</li>
				<li>
					<a href="Mobile-30-YourAccount-ChangePassword.html">
						<svg class="olymp-headphones-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="MUSIC&PLAYLISTS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-headphones-icon')?>"></use></svg>
						<span class="left-menu-title">Music & Playlists</span>
					</a>
				</li>
				<li>
					<a href="Mobile-31-YourAccount-HobbiesAndInterests.html">
						<svg class="olymp-weather-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="WEATHER APP"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-weather-icon')?>"></use></svg>
						<span class="left-menu-title">Weather App</span>
					</a>
				</li>
				<li>
					<a href="Mobile-32-YourAccount-EducationAndEmployement.html">
						<svg class="olymp-calendar-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="CALENDAR AND EVENTS"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-calendar-icon')?>"></use></svg>
						<span class="left-menu-title">Calendar and Events</span>
					</a>
				</li>
				<li>
					<a href="Mobile-33-YourAccount-Notifications.html">
						<svg class="olymp-badge-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Community Badges"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-badge-icon')?>"></use></svg>
						<span class="left-menu-title">Community Badges</span>
					</a>
				</li>
				<li>
					<a href="Mobile-34-YourAccount-ChatMessages.html">
						<svg class="olymp-cupcake-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Friends Birthdays"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-cupcake-icon')?>"></use></svg>
						<span class="left-menu-title">Friends Birthdays</span>
					</a>
				</li>
				<li>
					<a href="Mobile-35-YourAccount-FriendsRequests.html">
						<svg class="olymp-stats-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Account Stats"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-stats-icon')?>"></use></svg>
						<span class="left-menu-title">Account Stats</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-manage-widgets-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="Manage Widgets"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-manage-widgets-icon')?>"></use></svg>
						<span class="left-menu-title">Manage Widgets</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">YOUR ACCOUNT</h6>
			</div>

			<ul class="account-settings">
				<li>
					<a href="#">

						<svg class="olymp-menu-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-menu-icon')?>"></use></svg>

						<span>Profile Settings</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-star-icon')?>"></use></svg>

						<span>Create Fav Page</span>
					</a>
				</li>
				<li>
					<a href="#">
						<svg class="olymp-logout-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-logout-icon')?>"></use></svg>

						<span>Log Out</span>
					</a>
				</li>
			</ul>

			<div class="ui-block-title ui-block-title-small">
				<h6 class="title">About Olympus</h6>
			</div>

			<ul class="about-olympus">
				<li>
					<a href="#">
						<span>Terms and Conditions</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>FAQs</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Careers</span>
					</a>
				</li>
				<li>
					<a href="#">
						<span>Contact</span>
					</a>
				</li>
			</ul>

		</div>
	</div>
</div>

<!-- ... end Fixed Sidebar Left -->


<!-- Fixed Sidebar Right -->

<div class="fixed-sidebar right">
	<div class="fixed-sidebar-right sidebar--small" id="sidebar-right">

		<div class="mCustomScrollbar" data-mcs-theme="dark">
			<ul class="chat-users">
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar67-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar62-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>

				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar68-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>

				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar69-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>
				</li>

				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar70-sm.jpg')?>" class="avatar">
						<span class="icon-status disconected"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar64-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar71-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar72-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar63-sm.jpg')?>" class="avatar">
						<span class="icon-status status-invisible"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">
					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar72-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar71-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>
				</li>
			</ul>
		</div>

		<div class="search-friend inline-items">
			<a href="#" class="js-sidebar-open">
				<svg class="olymp-menu-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-menu-icon')?>')?>"></use></svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">
			<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
		</a>

	</div>

	<div class="fixed-sidebar-right sidebar--large" id="sidebar-right-1">

		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">Close Friends</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar67-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar62-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Mathilda Brinker</a>
						<span class="status">AT WORK!</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>

				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar68-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar69-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Michael Maximoff</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar70-sm.jpg')?>" class="avatar">
						<span class="icon-status disconected"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Rachel Howlett</a>
						<span class="status">OFFLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">MY FAMILY</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar64-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Sarah Hetfield</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">UNCATEGORIZED</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar71-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar72-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar63-sm.jpg')?>" class="avatar">
						<span class="icon-status status-invisible"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Nicholas Grisom</a>
						<span class="status">INVISIBLE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar72-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar71-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group" >
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="29-YourAccount-AccountSettings.html" class="settings">
				<svg class="olymp-settings-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-settings-icon')?>"></use></svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
			<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
		</a>

	</div>
</div>

<!-- ... end Fixed Sidebar Right -->


<!-- Fixed Sidebar Right-Responsive -->

<div class="fixed-sidebar right fixed-sidebar-responsive" id="sidebar-right-responsive">

	<div class="fixed-sidebar-right sidebar--small">
		<a href="#" class="js-sidebar-open">
			<svg class="olymp-menu-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-menu-icon')?>"></use></svg>
			<svg class="olymp-close-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
		</a>
	</div>

	<div class="fixed-sidebar-right sidebar--large">
		<div class="mCustomScrollbar" data-mcs-theme="dark">

			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">Close Friends</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar67-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar62-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Mathilda Brinker</a>
						<span class="status">AT WORK!</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>

				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar68-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Carol Summers</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar69-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Michael Maximoff</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>

				<li class="inline-items js-chat-open">


					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar70-sm.jpg')?>" class="avatar">
						<span class="icon-status disconected"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Rachel Howlett</a>
						<span class="status">OFFLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">MY FAMILY</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar64-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Sarah Hetfield</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>


			<div class="ui-block-title ui-block-title-small">
				<a href="#" class="title">UNCATEGORIZED</a>
				<a href="#">Settings</a>
			</div>

			<ul class="chat-users">
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar71-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>


				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar72-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>

				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar63-sm.jpg')?>" class="avatar">
						<span class="icon-status status-invisible"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Nicholas Grisom</a>
						<span class="status">INVISIBLE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar72-sm.jpg')?>" class="avatar">
						<span class="icon-status away"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Chris Greyson</a>
						<span class="status">AWAY</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
				<li class="inline-items js-chat-open">

					<div class="author-thumb">
						<img alt="author" src="<?php echo base_url('assets/images/avatar71-sm.jpg')?>" class="avatar">
						<span class="icon-status online"></span>
					</div>

					<div class="author-status">
						<a href="#" class="h6 author-name">Bruce Peterson</a>
						<span class="status">ONLINE</span>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>

						<ul class="more-icons">
							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="START CONVERSATION" class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="ADD TO CONVERSATION" class="olymp-add-to-conversation-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon')?>"></use></svg>
							</li>

							<li>
								<svg data-toggle="tooltip" data-placement="top" data-original-title="BLOCK FROM CHAT" class="olymp-block-from-chat-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-block-from-chat-icon')?>"></use></svg>
							</li>
						</ul>

					</div>
				</li>
			</ul>

		</div>

		<div class="search-friend inline-items">
			<form class="form-group" >
				<input class="form-control" placeholder="Search Friends..." value="" type="text">
			</form>

			<a href="29-YourAccount-AccountSettings.html" class="settings">
				<svg class="olymp-settings-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-settings-icon')?>"></use></svg>
			</a>

			<a href="#" class="js-sidebar-open">
				<svg class="olymp-close-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
			</a>
		</div>

		<a href="#" class="olympus-chat inline-items js-chat-open">

			<h6 class="olympus-chat-title">OLYMPUS CHAT</h6>
			<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
		</a>
	</div>

</div>

<!-- ... end Fixed Sidebar Right-Responsive -->


<!-- Header-BP -->

<header class="header" id="site-header">

	<div class="page-title">
		<h6>your account</h6>
	</div>

	<div class="header-content-wrapper">
		<form class="search-bar w-search notification-list friend-requests">
			<div class="form-group with-button">
				<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
				<button>
					<svg class="olymp-magnifying-glass-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon')?>"></use></svg>
				</button>
			</div>
		</form>

		<a href="#" class="link-find-friend">Find Friends</a>

		<div class="control-block">

			<div class="control-icon more has-items">
				<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
				<div class="label-avatar bg-blue">6</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FRIEND REQUESTS</h6>
						<a href="#">Find Friends</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list friend-requests">
							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar55-sm.jpg')?>')?>" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
									<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
								</div>
								<span class="notification-icon')?>">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar56-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Tony Stevens</a>
									<span class="chat-message-item">4 Friends in Common</span>
								</div>
								<span class="notification-icon')?>">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
								</div>
							</li>

							<li class="accepted">
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar57-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
								</div>
								<span class="notification-icon')?>">
									<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar58-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Stagg Clothing</a>
									<span class="chat-message-item">9 Friends in Common</span>
								</div>
								<span class="notification-icon')?>">
									<a href="#" class="accept-request">
										<span class="icon-add without-text">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>
									</a>

									<a href="#" class="accept-request request-del">
										<span class="icon-minus">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>
									</a>

								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
								</div>
							</li>

						</ul>
					</div>

					<a href="#" class="view-all bg-blue">Check all your Events</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
				<div class="label-avatar bg-purple">2</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Chat / Messages</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list chat-message">
							<li class="message-unread">
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar59-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Diana Jameson</a>
									<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon')?>">
									<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
								</span>
								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar60-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Jake Parker</a>
									<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
								<span class="notification-icon')?>">
									<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
								</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
								</div>
							</li>
							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar61-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
									<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
								</div>
									<span class="notification-icon')?>">
										<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
								</div>
							</li>

							<li class="chat-group">
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar11-sm.jpg')?>" alt="author">
									<img src="<?php echo base_url('assets/images/avatar12-sm.jpg')?>" alt="author">
									<img src="<?php echo base_url('assets/images/avatar13-sm.jpg')?>" alt="author">
									<img src="<?php echo base_url('assets/images/avatar10-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
									<span class="last-message-author">Ed:</span>
									<span class="chat-message-item">Yeah! Seems fine by me!</span>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
								</div>
									<span class="notification-icon')?>">
										<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
									</span>
								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-purple">View All Messages</a>
				</div>
			</div>

			<div class="control-icon more has-items">
				<svg class="olymp-thunder-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-thunder-icon')?>"></use></svg>

				<div class="label-avatar bg-primary">8</div>

				<div class="more-dropdown more-with-triangle triangle-top-center">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Notifications</h6>
						<a href="#">Mark all as read</a>
						<a href="#">Settings</a>
					</div>

					<div class="mCustomScrollbar" data-mcs-theme="dark">
						<ul class="notification-list">
							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar62-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
								</div>
									<span class="notification-icon')?>">
										<svg class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
								</div>
							</li>

							<li class="un-read">
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar63-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
								</div>
									<span class="notification-icon')?>">
										<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
								</div>
							</li>

							<li class="with-comment-photo">
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar64-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
								</div>
									<span class="notification-icon')?>">
										<svg class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
									</span>

								<div class="comment-photo">
									<img src="<?php echo base_url('assets/images/comment-photo1.jpg')?>" alt="photo">
									<span>“She looks incredible in that outfit! We should see each...”</span>
								</div>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar65-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
								</div>
									<span class="notification-icon')?>">
										<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
								</div>
							</li>

							<li>
								<div class="author-thumb">
									<img src="<?php echo base_url('assets/images/avatar66-sm.jpg')?>" alt="author">
								</div>
								<div class="notification-event">
									<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
									<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
								</div>
									<span class="notification-icon')?>">
										<svg class="olymp-heart-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon')?>"></use></svg>
									</span>

								<div class="more">
									<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
									<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
								</div>
							</li>
						</ul>
					</div>

					<a href="#" class="view-all bg-primary">View All Notifications</a>
				</div>
			</div>

			<div class="author-page author vcard inline-items more">
				<div class="author-thumb">
					<img alt="author" src="<?php echo base_url('assets/images/author-page.jpg" class="avatar">
					<span class="icon-status online"></span>
					<div class="more-dropdown more-with-triangle">
						<div class="mCustomScrollbar" data-mcs-theme="dark">
							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Your Account</h6>
							</div>

							<ul class="account-settings">
								<li>
									<a href="29-YourAccount-AccountSettings.html">

										<svg class="olymp-menu-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-menu-icon')?>"></use></svg>

										<span>Profile Settings</span>
									</a>
								</li>
								<li>
									<a href="36-FavPage-SettingsAndCreatePopup.html">
										<svg class="olymp-star-icon left-menu-icon"  data-toggle="tooltip" data-placement="right"   data-original-title="FAV PAGE"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-star-icon')?>"></use></svg>

										<span>Create Fav Page</span>
									</a>
								</li>
								<li>
									<a href="#">
										<svg class="olymp-logout-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-logout-icon')?>"></use></svg>

										<span>Log Out</span>
									</a>
								</li>
							</ul>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Chat Settings</h6>
							</div>

							<ul class="chat-settings">
								<li>
									<a href="#">
										<span class="icon-status online"></span>
										<span>Online</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon-status away"></span>
										<span>Away</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon-status disconected"></span>
										<span>Disconnected</span>
									</a>
								</li>

								<li>
									<a href="#">
										<span class="icon-status status-invisible"></span>
										<span>Invisible</span>
									</a>
								</li>
							</ul>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">Custom Status</h6>
							</div>

							<form class="form-group with-button custom-status">
								<input class="form-control" placeholder="" type="text" value="Space Cowboy">

								<button class="bg-purple">
									<svg class="olymp-check-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-check-icon')?>"></use></svg>
								</button>
							</form>

							<div class="ui-block-title ui-block-title-small">
								<h6 class="title">About Olympus</h6>
							</div>

							<ul>
								<li>
									<a href="#">
										<span>Terms and Conditions</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>FAQs</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>Careers</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span>Contact</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
				<a href="02-ProfilePage.html" class="author-name fn">
					<div class="author-title">
						James Spiegel <svg class="olymp-dropdown-arrow-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon')?>"></use></svg>
					</div>
					<span class="author-subtitle">SPACE COWBOY</span>
				</a>
			</div>

		</div>
	</div>

</header>

<!-- ... end Header-BP -->


<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive">

	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
						<div class="label-avatar bg-blue">6</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
						<div class="label-avatar bg-purple">2</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
					<div class="control-icon has-items">
						<svg class="olymp-thunder-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-thunder-icon')?>"></use></svg>
						<div class="label-avatar bg-primary">8</div>
					</div>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="olymp-magnifying-glass-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon')?>"></use></svg>
					<svg class="olymp-close-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-close-icon')?>"></use></svg>
				</a>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">

		<div class="tab-pane " id="request" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FRIEND REQUESTS</h6>
					<a href="#">Find Friends</a>
					<a href="#">Settings</a>
				</div>
				<ul class="notification-list friend-requests">
					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar55-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tamara Romanoff</a>
							<span class="chat-message-item">Mutual Friend: Sarah Hetfield</span>
						</div>
									<span class="notification-icon')?>">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar56-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tony Stevens</a>
							<span class="chat-message-item">4 Friends in Common</span>
						</div>
									<span class="notification-icon')?>">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
						</div>
					</li>
					<li class="accepted">
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar57-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>.
						</div>
									<span class="notification-icon')?>">
										<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar58-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Stagg Clothing</a>
							<span class="chat-message-item">9 Friends in Common</span>
						</div>
									<span class="notification-icon')?>">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
											</span>
										</a>

									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
						</div>
					</li>
				</ul>
				<a href="#" class="view-all bg-blue">Check all your Events</a>
			</div>

		</div>

		<div class="tab-pane " id="chat" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Chat / Messages</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<ul class="notification-list chat-message">
					<li class="message-unread">
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar59-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Diana Jameson</a>
							<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon')?>">
										<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
									</span>
						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar60-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Jake Parker</a>
							<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
									<span class="notification-icon')?>">
										<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
									</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
						</div>
					</li>
					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar61-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
							<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
						</div>
										<span class="notification-icon')?>">
											<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
						</div>
					</li>

					<li class="chat-group">
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar11-sm.jpg')?>" alt="author">
							<img src="<?php echo base_url('assets/images/avatar12-sm.jpg')?>" alt="author">
							<img src="<?php echo base_url('assets/images/avatar13-sm.jpg')?>" alt="author">
							<img src="<?php echo base_url('assets/images/avatar10-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
							<span class="last-message-author">Ed:</span>
							<span class="chat-message-item">Yeah! Seems fine by me!</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
										<span class="notification-icon')?>">
											<svg class="olymp-chat---messages-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon')?>"></use></svg>
										</span>
						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-purple">View All Messages</a>
			</div>

		</div>

		<div class="tab-pane " id="notification" role="tabpanel">

			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Notifications</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<ul class="notification-list">
					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar62-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
						</div>
										<span class="notification-icon')?>">
											<svg class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
						</div>
					</li>

					<li class="un-read">
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar63-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
						</div>
										<span class="notification-icon')?>">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
						</div>
					</li>

					<li class="with-comment-photo">
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar64-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
						</div>
										<span class="notification-icon')?>">
											<svg class="olymp-comments-post-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon')?>"></use></svg>
										</span>

						<div class="comment-photo">
							<img src="<?php echo base_url('assets/images/comment-photo1.jpg')?>" alt="photo">
							<span>“She looks incredible in that outfit! We should see each...”</span>
						</div>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar65-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
						</div>
										<span class="notification-icon')?>">
											<svg class="olymp-happy-face-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon')?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar66-sm.jpg')?>" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
										<span class="notification-icon')?>">
											<svg class="olymp-heart-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-heart-icon')?>"></use></svg>
										</span>

						<div class="more">
							<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
							<svg class="olymp-little-delete"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
						</div>
					</li>
				</ul>

				<a href="#" class="view-all bg-primary">View All Notifications</a>
			</div>

		</div>

		<div class="tab-pane " id="search" role="tabpanel">


				<form class="search-bar w-search notification-list friend-requests">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
					</div>
				</form>


		</div>

	</div>
	<!-- ... end  Tab panes -->

</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer header-spacer-small"></div>

<!-- Main Header Account -->

<div class="main-header">
	<div class="content-bg-wrap bg-account"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
				<div class="main-header-content">
					<h1>Your Account Dashboard</h1>
					<p>Welcome to your account dashboard! Here you’ll find everything you need to change your profile
	information, settings, read notifications and requests, view your latest messages, change your pasword and much
	more! Also you can create or manage your own favourite page, have fun!</p>
				</div>
			</div>
		</div>
	</div>
	<img class="img-bottom" src="<?php echo base_url('assets/images/account-bottom.png')?>" alt="friends">
</div>

<!-- ... end Main Header Account -->



<!-- Your Account Personal Information -->

<div class="container">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Account Settings</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Personal Account Settings Form -->
					
					<form>
						<div class="row">
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Who Can Friend You?</label>
									<select class="selectpicker form-control">
										<option value="EO">Everyone</option>
										<option value="NO">No One</option>
									</select>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Who Can View Your Posts</label>
									<select class="selectpicker form-control">
										<option value="US">Friends Only</option>
										<option value="EO">Everyone</option>
									</select>
								</div>
							</div>
					
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Notifications Sound</div>
										<p>A sound will be played each time you receive a new activity notification</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Notifications Email</div>
										<p>We’ll send you an email to your account each time you receive a new activity notification</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Friend’s Birthdays</div>
										<p>Choose wheather or not receive notifications about your friend’s birthdays on your newsfeed</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
								<div class="description-toggle">
									<div class="description-toggle-content">
										<div class="h6">Chat Message Sound</div>
										<p>A sound will be played each time you receive a new message on an inactive chat window</p>
									</div>
					
									<div class="togglebutton">
										<label>
											<input type="checkbox" checked="">
										</label>
									</div>
								</div>
							</div>
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<button class="btn btn-primary btn-lg full-width">Save all Changes</button>
							</div>
						</div>
					</form>
					
					<!-- ... end Personal Account Settings Form  -->

				</div>
			</div>
		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
			<div class="ui-block">

				<!-- Your Profile  -->
				
				<div class="your-profile">
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">Your PROFILE</h6>
					</div>
				
					<div id="accordion" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="headingOne">
								<h6 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon')?>"></use></svg>
									</a>
								</h6>
							</div>
				
							<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
								<ul class="your-profile-menu">
									<li>
										<a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
									</li>
									<li>
										<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
									</li>
									<li>
										<a href="30-YourAccount-ChangePassword.html">Change Password</a>
									</li>
									<li>
										<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
									</li>
									<li>
										<a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="ui-block-title">
						<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
						<a href="#" class="items-round-little bg-primary">8</a>
					</div>
					<div class="ui-block-title">
						<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
					</div>
					<div class="ui-block-title">
						<a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
						<a href="#" class="items-round-little bg-blue">4</a>
					</div>
					<div class="ui-block-title ui-block-title-small">
						<h6 class="title">FAVOURITE PAGE</h6>
					</div>
					<div class="ui-block-title">
						<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
					</div>
					<div class="ui-block-title">
						<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
					</div>
				</div>
				
				<!-- ... end Your Profile  -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon')?>"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-little-delete')?>"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar14-sm.jpg')?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/author-page.jpg')?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img src="<?php echo base_url('assets/images/avatar14-sm.jpg')?>" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group label-floating is-empty">
			<label class="control-label">Press enter to post...</label>
			<textarea class="form-control" placeholder=""></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-computer-icon')?>"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon')?>"><use xlink:href="<?php echo base_url('assets/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon')?>"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat1.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat2.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat3.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat4.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat5.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat6.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat7.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat8.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat9.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat10.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat11.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat12.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat13.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat14.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat15.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat16.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat17.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat18.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat19.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat20.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat21.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat22.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat23.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat24.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat25.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat26.png')?>" alt="icon">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url('assets/images/icon-chat27.png')?>" alt="icon">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

<?php $this->load->view('footer.php');?>
