@extends('layouts.contentLayoutMaster')
@section('content')
<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Education-->
								<div class="d-flex flex-row">
									<!--begin::Aside-->
									<div class="flex-row-auto offcanvas-mobile w-300px w-xl-325px" id="kt_profile_aside">
										<!--begin::Nav Panel Widget 2-->
										<div class="card card-custom gutter-b">
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Wrapper-->
												<div class="d-flex justify-content-between flex-column pt-4 h-100">
													<!--begin::Container-->
													<div class="pb-5">
														<!--begin::Header-->
														<div class="d-flex flex-column flex-center">
															<!--begin::Symbol-->
															<div class="symbol symbol-120 symbol-circle symbol-success overflow-hidden">
																<span class="symbol-label">
																	<img src="{{asset($student_data[0]->photo)}}" class="h-100 align-self-end" alt="" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Username-->
															<a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{($student_data[0]->full_name)}}</a>
															<!--end::Username-->
															<!--begin::Info-->
															<div class="font-weight-bold text-dark-50 font-size-sm pb-6">{{($student_data[0]->email)}}</div>
															<!--end::Info-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="pt-1">
															<!--begin::Item-->
															<div class="d-flex align-items-center pb-9">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-2x svg-icon-dark-50">
																			<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
																					<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
																					<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
																					<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="d-flex flex-column flex-grow-1">
																	<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">CURSO</a>
																	<span class="text-muted font-weight-bold">{{($student_data[0]->course_name)}}</span>
																</div>
																<!--end::Text-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex align-items-center pb-9">
																<!--begin::Symbol-->
																<div class="symbol symbol-45 symbol-light mr-4">
																	<span class="symbol-label">
																		<span class="svg-icon svg-icon-2x svg-icon-dark-50">
																			<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
																			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24" />
																					<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
																					<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Text-->
																<div class="d-flex flex-column flex-grow-1">
																	<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder">PARALELO</a>
																	<span class="text-muted font-weight-bold">{{($student_data[0]->parallel_name)}}</span>
																</div>
																<!--end::Text-->
															</div>
															<!--end::Item-->

														</div>
														<!--end::Body-->
													</div>
													<!--eng::Container-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Nav Panel Widget 2-->
									</div>
									<!--end::Aside-->
									<!--begin::Content-->
									<div class="flex-row-fluid ml-lg-8">
										<!--begin::Card-->
										<div class="card card-custom gutter-bs">
											<!--Begin::Header-->
											<div class="card-header card-header-tabs-line">
												<div class="card-toolbar">
													<ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
														<li class="nav-item mr-3">
															<a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
																<span class="nav-icon mr-2">
																	<span class="svg-icon mr-3">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Chat-check.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																				<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
																<span class="nav-text font-weight-bold">Datos Personales</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
																<span class="nav-icon mr-2">
																	<span class="svg-icon mr-3">
																		<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Notification2.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																				<rect x="0" y="0" width="24" height="24" />
																				<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
																				<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
																			</g>
																		</svg>
																		<!--end::Svg Icon-->
																	</span>
																</span>
																<span class="nav-text font-weight-bold">Observaciones</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--Begin::Body-->
											<div class="card-body px-0">
												<div class="tab-content pt-5">
													<!--begin::Tab Content-->
													<div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
														<form class="form">
															<!--begin::Heading-->
															<div class="row">
																<div class="col-lg-9 col-xl-6 offset-xl-3">
                                                                    <h3 class="font-size-h6 mb-5">DATOS:</h3>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-user"></i> {{__('label.first_name')}}</h6><span>{{$student_data[0]->first_name}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-user"></i> {{__('label.last_name_father')}}</h6><span>{{$student_data[0]->last_name_father}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-user"></i> {{__('label.last_name_mother')}}</h6><span>{{$student_data[0]->last_name_mother}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-drivers-license"></i> {{__('label.personal_id')}}</h6><span>{{$student_data[0]->personal_id}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-barcode"></i> {{__('label.code')}}</h6><span>{{$student_data[0]->code}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-calendar"></i> {{__('label.birthdate')}}</h6><span>{{$student_data[0]->birthdate}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-address-book"></i> {{__('label.address')}}</h6><span>{{$student_data[0]->address}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-phone-square"></i> {{__('label.number_reference')}}</h6><span>{{$student_data[0]->number_reference}}</span>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="ttl-info text-left">
                                                                        <h6><i class="fa fa-envelope"></i> {{__('label.email')}}</h6><span>{{$student_data[0]->email}}</span>
                                                                    </div>
                                                                </div>

															</div>
															<!--end::Heading-->
															<div class="form-group row">
																<div class="col-lg-9 col-xl-9">
																</div>
                                                            </div>
														</form>
													</div>
													<!--end::Tab Content-->
                                                    <!--begin::Tab Content-->
                                                    <div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                                        @foreach ($observations as $option)
														<div class="container">
															<form class="form">
																<div class="form-group">
                                                                    <h3 class="font-size-h6 mb-5">{{$option->type_observation_n}}</h3>
																	<textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" rows="3" placeholder="Type notes">{{$option->name}} {{$option->description}}</textarea>
																</div>
																{{--  <div class="row">
																	<div class="col">
																		<a href="#" class="btn btn-light-primary font-weight-bold">Add notes</a>
																		<a href="#" class="btn btn-clean font-weight-bold">Cancel</a>
																	</div>
																</div>  --}}
															</form>
                                                            <div class="separator separator-dashed my-10"></div>
                                                            <h3 class="font-size-h6 mb-5">{{$option->type_observation_p}}</h3>
															<!--begin::Timeline-->
															<div class="timeline timeline-3">
																<div class="timeline-items">
																	<div class="timeline-item">
																		<div class="timeline-media">
																			<i class="flaticon2-shield text-danger"></i>
																		</div>
																		<div class="timeline-content">
																			<div class="d-flex align-items-center justify-content-between mb-3">
																				<div class="mr-2">
																					<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">{{$option->name}} {{$option->description}}</a>
																					{{--  <span class="text-muted ml-2">{{$option->description}}</span>
																					<span class="label label-light-danger font-weight-bolder label-inline ml-2">pending</span>  --}}
																				</div>
																				{{--  <div class="dropdown ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
																					<a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																						<i class="ki ki-more-hor font-size-lg text-primary"></i>
																					</a>
																					<div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
																						<!--begin::Navigation-->
																						<ul class="navi navi-hover">
																							<li class="navi-header font-weight-bold py-4">
																								<span class="font-size-lg">Choose Label:</span>
																								<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
																							</li>
																							<li class="navi-separator mb-3 opacity-70"></li>
																							<li class="navi-item">
																								<a href="#" class="navi-link">
																									<span class="navi-text">
																										<span class="label label-xl label-inline label-light-success">Customer</span>
																									</span>
																								</a>
																							</li>
																							<li class="navi-item">
																								<a href="#" class="navi-link">
																									<span class="navi-text">
																										<span class="label label-xl label-inline label-light-danger">Partner</span>
																									</span>
																								</a>
																							</li>
																							<li class="navi-item">
																								<a href="#" class="navi-link">
																									<span class="navi-text">
																										<span class="label label-xl label-inline label-light-warning">Suplier</span>
																									</span>
																								</a>
																							</li>
																							<li class="navi-item">
																								<a href="#" class="navi-link">
																									<span class="navi-text">
																										<span class="label label-xl label-inline label-light-primary">Member</span>
																									</span>
																								</a>
																							</li>
																							<li class="navi-item">
																								<a href="#" class="navi-link">
																									<span class="navi-text">
																										<span class="label label-xl label-inline label-light-dark">Staff</span>
																									</span>
																								</a>
																							</li>
																							<li class="navi-separator mt-3 opacity-70"></li>
																							<li class="navi-footer py-4">
																								<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																								<i class="ki ki-plus icon-sm"></i>Add new</a>
																							</li>
																						</ul>
																						<!--end::Navigation-->
																					</div>
																				</div>  --}}
																			</div>
																			<p class="p-0"></p>
																		</div>
																	</div>
																</div>
															</div>
                                                            <!--end::Timeline-->
                                                        </div>
                                                        @endforeach
                                                    </div>

													{{--  <div class="tab-pane" id="kt_apps_contacts_view_tab_1" role="tabpanel">
														<div class="container">
															<div class="table-responsive">
                                                                <table class="table">
                                                                    <thead class="thead-dark">
                                                                    <tr>
                                                                        <th scope="col">NOMBRE</th>
                                                                        <th scope="col">DESCRIPCION</th>
                                                                        <th scope="col">TIPO OBSERVACION</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($observations as $option)
                                                                        <tr>
                                                                            <td style="width: 20%">{{$option->name}}</td>
                                                                            <td style="width: 20%">{{$option->description}}</td>
                                                                            <td style="width: 20%">{{$option->type_observation}}</td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
														</div>
													</div>  --}}
													<!--end::Tab Content-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Education-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
@endsection

