<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'LRT 2';
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>

<div class="margin-1">
    <div>
        <div class="t1">
            <img class="100-wh" src="images/t3.jpg"></img></br>
        </div> 
    </div>
    <br />
    <br />
    <div class="col-lg-8">
        <div class="main-hdr">
            <div class="row">
                <div class="station-hdr">  <h2>LRT 2</h2>  </div>           
                <div class="station-menu">
                    <select class="dropdown dropdown-menu_" name="formGender">
                        <option value="">Select a Station</option>
                        <option value="">Roosevelt</option>
                        <option value="">Balintawak</option>
                        <option value="">Monumento</option>
                        <option value="">5th Avenue</option>
                        <option value="">R. Papa</option>
                        <option value="">Abad Santos</option>
                        <option value="">Blumentritt</option>
                        <option value="">Tayuman</option>
                        <option value="">Bambang</option>
                        <option value="">Doroteo Jose</option>
                        <option value="">Carriedo</option>
                        <option value="">Central Terminal</option>
                        <option value="">United Nations</option>
                        <option value="">Pedro Gil</option>
                        <option value="">Quirino</option>
                        <option value="">Vito Cruz</option>
                        <option value="">Gil Puyat</option>
                        <option value="">Libertad</option>
                        <option value="">EDSA</option>
                        <option value="">Baclaran</option>
                    </select>
                    <button class="btn btn-success" type="button">Go!</button>
                </div>
            </div>            
            <h3>Updates for Katipunan</h3>
        </div>
    </div>
    <br/>

    <div class="row">
        <div class="col-lg-8">
            <div class="bs-example">

                <table class="table table-striped">
                    <thead class="tablehead">
                        <tr>
                            <th>User</th>
                            <th>Comment</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody class="tablebody">
                        <tr>
                            <td>Charles</td>
                            <td>
                                <p class="msg-content">Ang saya, wala gaanong tao. Hahaha 
                                        <img class="emojihappy" src="images/emojihappy1.png"></p>
                            <form>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="star-hdr">Overall Crowd Level:</p></div>
                                    <div class="col-sm-2">
                                            <div class="stars">
                                                <input type="radio" name="star" class="star-1" checked id="star-11" />
                                                <label class="star-1" for="star-11">1</label>
                                                <input type="radio" name="star" class="star-2" id="star-12" />
                                                <label class="star-2" for="star-12">2</label>
                                                <input type="radio" name="star" class="star-3"  id="star-13" />
                                                <label class="star-3" for="star-13">3</label>
                                                <input type="radio" name="star" class="star-4" id="star-14" />
                                                <label class="star-4" for="star-14">4</label>
                                                <input type="radio" name="star" class="star-5"  id="star-1215" />
                                                <label class="star-5" for="star-15">5</label>
                                                <span></span>
                                            </div> 
                                    </div>
                                </div>
                            </form>                            
                            <form>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="star-hdr">Crowd Level inside the Train: </p></div>
                                    <div class="col-sm-2">
                                             <div class="stars">
                                                <input type="radio" name="star" class="star-1" checked id="star-111" />
                                                <label class="star-1" for="star-0101">1</label>
                                                <input type="radio" name="star" class="star-2" id="star-112" />
                                                <label class="star-2" for="star-0102">2</label>
                                                <input type="radio" name="star" class="star-3" id="star-113" />
                                                <label class="star-3" for="star-0103">3</label>
                                                <input type="radio" name="star" class="star-4" id="star-114" />
                                                <label class="star-4" for="star-0104">4</label>
                                                <input type="radio" name="star" class="star-5" id="star-0025" />
                                                <label class="star-5" for="star-0105">5</label>
                                                <span></span>
                                            </div> 
                                    </div>
                                </div>                                
                            </form>       
                 
                            <div class="user-response">
                                <span><a class="UFILikeLink" href="#" role="button" aria-live="polite" title="Like this" data-ft="{&quot;tn&quot;:&quot;>&quot;}" data-reactid=".11e"><span data-reactid=".11e.1">Approve (5)</span></a>
                                </span> · <span>
                                <a class="comment_link" href="#" role="button" title="Leave a comment" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }" data-reactid=".11f"><span data-reactid=".11f.1">Disapprove (18)</span></a>
                                </span> · <span>
                            </div>
                            </td></td>
                            <td>March 28, 2015</br>9:00AM</td>
                        </tr>
                        <tr>
                            <td>Paolo</td>
                            <td>
                                <p class="msg-content">Code Red wag na kayong pumunta!!</p>      
                 
                            <div class="user-response">
                                <span><a class="UFILikeLink" href="#" role="button" aria-live="polite" title="Like this" data-ft="{&quot;tn&quot;:&quot;>&quot;}" data-reactid=".11e"><span data-reactid=".11e.1">Approve (20)</span></a>
                                </span> · <span>
                                <a class="comment_link" href="#" role="button" title="Leave a comment" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }" data-reactid=".11f"><span data-reactid=".11f.1">Disapprove (2)</span></a>
                                </span> · <span>
                            </div>
                            </td></td>
                            <td>March 28, 2015</br>8:00AM</td>
                        </tr>
                        <tr>
                            <td>Bianca</td>
                            <td>
                                <p class="msg-content">May bangaan malapit sa Station, pasok kayo ng maaga! <br>
                                        <img class="emojifear" src="images/emojifear1.png"> Huhuhu <a>#feelingWorried</a></p>                           
                            <div class="user-response">
                                <span><a class="UFILikeLink" href="#" role="button" aria-live="polite" title="Like this" data-ft="{&quot;tn&quot;:&quot;>&quot;}" data-reactid=".11e"><span data-reactid=".11e.1">Approve (10)</span></a>
                                </span> · <span>
                                <a class="comment_link" href="#" role="button" title="Leave a comment" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }" data-reactid=".11f"><span data-reactid=".11f.1">Disapprove (0)</span></a>
                                </span> · <span>
                            </div>
                            </td></td>
                            <td>March 28, 2015</br>7:03AM</td>
                        </tr>
                        <tr>
                            <td>Therese</td>
                            <td>
                                <p class="msg-content">OMG! I hope the trains will be fixed ASAP. I'm going to be late.
                                        <img class="emojilate" src="images/emojilate1.png"> <a>#late</a> Sana ma-fix na agad.</a></p>                           
                            <form>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <p class="star-hdr">Overall Crowd Level:</p></div>
                                    <div class="col-sm-2">
                                            <div class="stars">
                                                <input type="radio" name="star" class="star-1"  id="star-11" />
                                                <label class="star-1" for="star-11">1</label>
                                                <input type="radio" name="star" class="star-2" checked id="star-12" />
                                                <label class="star-2" for="star-12">2</label>
                                                <input type="radio" name="star" class="star-3"  id="star-13" />
                                                <label class="star-3" for="star-13">3</label>
                                                <input type="radio" name="star" class="star-4" id="star-14" />
                                                <label class="star-4" for="star-14">4</label>
                                                <input type="radio" name="star" class="star-5"  id="star-1215" />
                                                <label class="star-5" for="star-15">5</label>
                                                <span></span>
                                            </div> 
                                    </div>
                                </div>
                            </form>
                            <div class="user-response">
                                <span><a class="UFILikeLink" href="#" role="button" aria-live="polite" title="Like this" data-ft="{&quot;tn&quot;:&quot;>&quot;}" data-reactid=".11e"><span data-reactid=".11e.1">Approve (13)</span></a>
                                </span> · <span>
                                <a class="comment_link" href="#" role="button" title="Leave a comment" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }" data-reactid=".11f"><span data-reactid=".11f.1">Disapprove (0)</span></a>
                                </span> · <span>
                            </div>
                            </td></td>
                            <td>March 28, 2015</br>7:03AM</td>
                        </tr>                                            

                    </tbody>
                </table>
            </div>

            <div class="pagination-design">
                <ul class="pagination">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="active"><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                </ul>
            </div>

            <div>
                <hr>
                <font color="gray" size="5px" style="font-family:Calibri; text-align: left">
                    <p>
                        <strong>Add an Update:</strong>
                    </p>
                </font>

                <div>
                    <textarea class="ckeditor" name="editor1"></textarea>
                    <br>
                    <form>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="star-hdr"><b>Overall Crowd Level:</b></p></div>
                            <div class="col-sm-2">
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-1" />
                                    <label class="star-1" for="star-1">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-2" />
                                    <label class="star-2" for="star-2">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-3" />
                                    <label class="star-3" for="star-3">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-4" />
                                    <label class="star-4" for="star-4">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-5" />
                                    <label class="star-5" for="star-5">5</label>
                                    <span></span>
                                </div> 
                            </div>
                        </div>
                    </form>
                    <form>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="star-hdr"><b>Ticket booth Crowd Level: </b></p></div>
                            <div class="col-sm-2">
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-01" />
                                    <label class="star-1" for="star-01">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-02" />
                                    <label class="star-2" for="star-02">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-03" />
                                    <label class="star-3" for="star-03">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-04" />
                                    <label class="star-4" for="star-04">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-05" />
                                    <label class="star-5" for="star-05">5</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>                               
                    </form>
                    <form>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="star-hdr"><b>Crowd Level inside the Train: </b></p></div>
                            <div class="col-sm-2">
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-001" />
                                    <label class="star-1" for="star-001">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-002" />
                                    <label class="star-2" for="star-002">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-003" />
                                    <label class="star-3" for="star-003">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-004" />
                                    <label class="star-4" for="star-004">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-005" />
                                    <label class="star-5" for="star-005">5</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>                                
                    </form>
                </div>
                <button style="margin-top: 30px" class="btn-submit" type="button">Submit Entry</button>
            </div>
        </div>

    <div class="side-right">
        <div class="col-lg-4">
            <a class="twitter-timeline" href="https://twitter.com/search?q=dotcmrt3" data-widget-id="585054429503594497">Tweets about dotcmrt3</a>
           
            <br /><br/>

            <div class="s1">
                <img src="images/s5.gif"></img></br>
            </div>

            <div class="revolver">
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                <script type="text/javascript" src="//rc.revolvermaps.com/0/0/6.js?i=2zwwqfrj5wz&amp;m=7&amp;s=220&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
            </div>

            <br />
            <br />
        </div>
    </div>

    </div>

    <br />
    <br />
    <div class="b1">
        <img class="100-wh" src="images/b3.png"></img></br>
    </div>
</div>
