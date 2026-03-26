<form action="" method="">

<input type="text"placeholder="your name"name="nName" value="DD">
Password:<input type="password" name=""required>
<br/>
Gender:
男<input type="radio" name="mGender"value="m">
女<input type="radio" name="mGender"value="f"checked><br>

Interest:
看小說<input type="checkbox" name="mInterest"value="novel">
游泳<input type="checkbox" name="mInterest"value="swim">
睡覺<input type="checkbox" name="mInterest"value="sleep">

Where are you from:<select name="nCity"multipal><!--multipal多選-->
<option value="Taipei">台北</option>
<option value="Taichung">台中</option>
<option value="Kaohsiung"selected>高雄</option>
</select>



<input type="date" name="mDate" value="m"><br/>
<input type="time" name="mTime" value="m"><br/>
<input type="color" name="mColor" value="m"><br/>
<input type="range" name="mRange" value="m"><br/>
<input type="number" name="mNumber" value="m"><br/>
<input type="email" name="mEmail" value="m"><br/>

<input type="hidden" name="mGender" value="m"><br/>


<textarea name="comment" rows="10" cols="80">
Please

</textarea>

<br> 
<input type="submit" value="送出">
<input type="reset"value="重設">



</form>