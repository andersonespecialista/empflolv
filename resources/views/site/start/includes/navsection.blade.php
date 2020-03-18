<section class="elementor-element elementor-element-5921d4de elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="5921d4de" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-background-overlay"></div>
		<div class="elementor-container elementor-column-gap-default">
			<div class="elementor-row">
				<div class="elementor-element elementor-element-3fa67c27 elementor-column elementor-col-33 elementor-top-column" data-id="3fa67c27" data-element_type="column">
					<div class="elementor-column-wrap  elementor-element-populated">
						<div class="elementor-widget-wrap">
							<div class="elementor-element elementor-element-4e1f803f elementor-widget elementor-widget-heading" data-id="4e1f803f" data-element_type="widget" data-widget_type="heading.default">
								<div class="elementor-widget-container">
								<h1 class="elementor-heading-title elementor-size-default">Empregos Floriano</h1>		
								</div>
							</div>
						</div>
					</div>
				</div>
				@guest
				<div class="elementor-element elementor-element-4ab8b4d0 elementor-column elementor-col-33 elementor-top-column" data-id="4ab8b4d0" data-element_type="column">
					<div class="elementor-column-wrap  elementor-element-populated">
						<div class="elementor-widget-wrap">
							<div class="elementor-element elementor-element-3adb2963 elementor-align-right elementor-mobile-align-center elementor-widget-mobile__width-initial elementor-widget elementor-widget-button" data-id="3adb2963" data-element_type="widget" data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
										<a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
										<span class="elementor-button-content-wrapper">
										<span class="elementor-button-text">ENTRAR</span>
										</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="elementor-element elementor-element-52900a0a elementor-column elementor-col-33 elementor-top-column" data-id="52900a0a" data-element_type="column">
					<div class="elementor-column-wrap  elementor-element-populated">
						<div class="elementor-widget-wrap">
							<div class="elementor-element elementor-element-3eb6cce8 elementor-mobile-align-center elementor-widget elementor-widget-button" data-id="3eb6cce8" data-element_type="widget" data-widget_type="button.default">
								<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
									<a href="#" class="elementor-button-link elementor-button elementor-size-sm" role="button">
									<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Cadastre-se gratuitamente</span>
									</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@else
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			</ul>
			@endguest
		</div>
	</div>
</section>
