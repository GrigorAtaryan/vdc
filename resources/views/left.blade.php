<aside class="s-12 l-3">
              
                <!--  <h3>Navigation</h3> -->
                  <div class="aside-nav">
					<ul>
						@foreach($menu_result as $name=>$sub_categories)
							 <li>
								<a>{{$name}}</a>
									<ul>
										@foreach($sub_categories as $sub_category)
											<li>
												 <a href="{{ url('category/' . $sub_category->sub_category_name . '/' . $sub_category->id) }}"><b class="footer_font">{{$sub_category->sub_category_name}}</b></a>
											</li>
										@endforeach
									
									</ul>
							 </li>
						@endforeach
					</ul>
					<!--
                     <ul>
                           <li>
                           <a>Laptop</a>
                               <ul>
                                  <li><a>15.6"</a></li>
                                  <li><a>17.3"</a></li>
                               </ul>
                        </li>
                            <li>
                           <a>Monitors</a>
                               <ul>
                                  <li><a>19"</a></li>
                                  <li><a>20"</a></li>
                                  <li><a>22"</a></li>
                                  <li><a>23"</a></li>
                                  <li><a>24"</a></li>
                                  <li><a>27"</a></li>
                               </ul>
                        </li>
                         <li>
                           <a>Hardware</a>
                           <ul>
                              <li><a>Mather board</a></li>
                              <li><a>CPU</a></li>
                              <li><a>RAM</a></li>
                              <li><a>VGA</a></li>
                              <li><a>DVD</a></li>
                              <li><a>HDD</a></li>
                              <li><a>SSHD</a></li>
                              <li><a>SSD</a></li>
                              <li><a>CPU Cooler</a></li>
                           </ul>
                        </li>
                        <li>
                           <a>Network</a>
                               <ul>
                                  <li><a>Ubiquiti</a></li>
                                  <li><a>MicroTik</a></li>
                                  <li><a>D-Link</a></li>
                                  <li><a>TP-Link</a></li>
                                  <li><a>Tenda</a></li>
                                  <li><a>LinkSys</a></li>
                                  <li><a>Accessories</a></li>
                               </ul>
                        </li>
                            <li>
                           <a>VoIP</a>
                               <ul>
                                  <li><a>Atcom</a></li>
                                  <li><a>LinkSys</a></li>
                               </ul>
                        </li>
                            <li>
                           <a>Security</a>
                               <ul>
                                  <li><a>Analog Camera</a></li>
                                  <li><a>IP Camera</a></li>
                                  <li><a>DVR</a></li>
                                  <li><a>HDCVI</a></li>
                                  <li><a>Alarm Systems</a></li>
                               </ul>
                        </li>
                            <li>
                           <a>Printer and Scanner</a>
                               <ul>
                                  <li><a>Canon</a></li>
                                  <li><a>HP</a></li>
                                  <li><a>Epson</a></li>
                                  <li><a>Samsung</a></li>
                               </ul>
                        </li>
                            <li>
                           <a>UPS</a>
                               <ul>
                                  <li><a>APC</a></li>
                                  <li><a>EzCool</a></li>
                                  <li><a>Mercury</a></li>
                               </ul>
                        </li>
                            <li>
                           <a>Accessories</a>
                               <ul>
                                  <li><a>Micro SD and SD</a></li>
                                  <li><a>USB Flash</a></li>
                                  <li><a>External Hdd</a></li>
                                  <li><a>Web Camera</a></li>
                                  <li><a>Keyboard</a></li>
                                  <li><a>Mouse</a></li>
                                  <li><a>Speaker</a></li>
                                  <li><a>Microphone</a></li>
                                  <li><a>Headphones</a></li>
                                  
                               </ul>
                        </li>
                     
                     </ul>-->
                  </div>
               </aside>