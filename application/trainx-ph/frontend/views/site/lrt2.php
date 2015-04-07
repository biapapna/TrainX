<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'LRT 2';
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>

<div>
    <h1>LRT 2</h1>
	<h2>Updates for Gilmore:</h2>
	<p>
		<select name="formGender">
			<option value="">Select a Station</option>
			<option value="">Santolan</option>
			<option value="">Marikina River</option>
			<option value="">Katipunan</option>
			<option value="">Anonas</option>
			<option value="">Araneta Center–Cubao</option>
			<option value="">Betty Go-Belmonte</option>
			<option value="">Gilmore</option>
			<option value="">J. Ruiz</option>
			<option value="">V. Mapa</option>
			<option value="">Pureza</option>
			<option value="">Legarda</option>
		</select>
		<button type="button">Go!</button>
	</p>
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
                <td>Jose</td>
                <td><h3> Walang tao! </h3>
                </br>
                    No. of people in the station:
<form>
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
</form>   
    </div> 
                <div><span><a class="UFILikeLink" href="#" role="button" aria-live="polite" title="Like this" data-ft="{&quot;tn&quot;:&quot;>&quot;}" data-reactid=".11e"><span data-reactid=".11e.1">Approve (2)</span></a>
                </span> · <span>
                <a class="comment_link" href="#" role="button" title="Leave a comment" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }" data-reactid=".11f"><span data-reactid=".11f.1">Disapprove (30)</span></a>
                </span> · <span></div>
                </td></td>
                <td>March 28, 2015</br>9:00AM</td>
            </tr>
            <tr>
                <td>Joey</td>
                <td><h3>Code Red wag na kayong pumunta!!</h3>
                </br>
                <div><span><a class="UFILikeLink" href="#" role="button" aria-live="polite" title="Like this" data-ft="{&quot;tn&quot;:&quot;>&quot;}" data-reactid=".11e"><span data-reactid=".11e.1">Approve (20)</span></a>
                </span> · <span>
                <a class="comment_link" href="#" role="button" title="Leave a comment" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }" data-reactid=".11f"><span data-reactid=".11f.1">Disapprove (2)</span></a>
                </span> · <span></div></td>
                <td>March 28, 2015</br>8:00AM</td>
            </tr>
            <tr>
                <td>John</td>
                <td><h3>May bangaan malapit sa Station, pasok kayo ng maaga!</h3>
                <div><span><a class="UFILikeLink" href="#" role="button" aria-live="polite" title="Like this" data-ft="{&quot;tn&quot;:&quot;>&quot;}" data-reactid=".11e"><span data-reactid=".11e.1">Approve (10)</span></a>
                </span> · <span>
                <a class="comment_link" href="#" role="button" title="Leave a comment" data-ft="{ &quot;tn&quot;: &quot;S&quot;, &quot;type&quot;: 24 }" data-reactid=".11f"><span data-reactid=".11f.1">Disapprove (0)</span></a>
                </span> · <span></div></td></td>
                <td>March 28, 2015</br>7:00AM</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="pagination-design">
    <ul class="pagination">
  <li><a href="#">1</a></li>
  <li class="active"><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
</div>
<hr>
    <font color="gray" size="4px" style="font-family:Calibri">
        <p>
            <strong>Add an Update:</strong>
        </p>
        </br>
    </font>

    <textarea class="ckeditor" name="editor1"></textarea>
<div class="rating">
    No. of people in the station:
<form id="ratingsForm">
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
</form>
    No. of people in the ticket both:
<form id="ratingsForm1">
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
</form>
    No. of people inside the train:
<form id="ratingsForm2">
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
</form>

<button class="btn-submit" type="button">Submit!</button>
</div>
</br>
</br>
</div>



