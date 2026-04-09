<?php
?>
<HTML>
<HEAD>
<TITLE>報名表</TITLE>
</HEAD>

<BODY BGCOLOR="#eeeeee">

<CENTER>
    <FONT SIZE="6" COLOR="#f74b4b"><B>報名表</B></FONT>
    <BR><BR>
    <FONT SIZE="4">填完下表您將擁有一個幸福難忘的夏天>_< ! </FONT>
</CENTER>
<HR>

<FORM ACTION="finish.php" METHOD="">

<CENTER>
<TABLE BORDER="1" WIDTH="80%" BGCOLOR="white" CELLPADDING="8">

<TR>
    <TH COLSPAN="2"><FONT SIZE="5">入獄申請資料</FONT></TH>
</TR>

<TR>
    <TD>姓名</TD>
    <TD>
        <INPUT TYPE="text" NAME="nName" PLACEHOLDER="請輸入你的名字">
    </TD>
</TR>

<TR>
    <TD>身分證號</TD>
    <TD>
        <INPUT TYPE="password" NAME="nPassword" REQUIRED>
    </TD>
</TR>

<TR>
    <TD>性別</TD>
    <TD>
        男 <INPUT TYPE="radio" NAME="mGender" VALUE="男">
        女 <INPUT TYPE="radio" NAME="mGender" VALUE="女" CHECKED>
    </TD>
</TR>

<TR>
    <TD>易拖延類型</TD>
    <TD>
        草稿 <INPUT TYPE="checkbox" NAME="mInterest[]" VALUE="草稿拖延"><BR>
        線稿 <INPUT TYPE="checkbox" NAME="mInterest[]" VALUE="線稿逃避"><BR>
        上色 <INPUT TYPE="checkbox" NAME="mInterest[]" VALUE="上色棄坑"><BR>
        背景 <INPUT TYPE="checkbox" NAME="mInterest[]" VALUE="背景放棄">
    </TD>
</TR>

<TR>
    <TD>抓捕地點</TD>
    <TD>
        <SELECT NAME="nCity">
            <OPTION VALUE="台北畫師改造監獄">台北畫師改造監獄</OPTION>
            <OPTION VALUE="台中畫師改造所">台中畫師改造所</OPTION>
            <OPTION VALUE="高雄完稿中心" SELECTED>高雄完稿中心</OPTION>
        </SELECT>
    </TD>
</TR>

<TR>
    <TD>預計入獄日期</TD>
    <TD><INPUT TYPE="date" NAME="mDate"></TD>
</TR>

<TR>
    <TD>預計入獄時間</TD>
    <TD><INPUT TYPE="time" NAME="mTime"></TD>
</TR>

<TR>
    <TD>您的代表色</TD>
    <TD><INPUT TYPE="color" NAME="mColor"></TD>
</TR>

<TR>
    <TD>作品完成度</TD>
    <TD>
        <INPUT TYPE="range" NAME="mRange" MIN="0" MAX="100">
    </TD>
</TR>

<TR>
    <TD>目前未完成作品數</TD>
    <TD><INPUT TYPE="number" NAME="mNumber" MIN="0"></TD>
</TR>

<TR>
    <TD>Email</TD>
    <TD><INPUT TYPE="email" NAME="mEmail"></TD>
</TR>

<TR>
    <TD>隱藏代碼</TD>
    <TD>
        <INPUT TYPE="hidden" NAME="mCode" VALUE="PRISON2026">
        系統已自動填入
    </TD>
</TR>

<TR>
    <TD>自白書</TD>
    <TD>
        <TEXTAREA NAME="comment" ROWS="6" COLS="40">我保證這次會把圖畫完,否則捐贈中心一萬元</TEXTAREA>
    </TD>
</TR>

<TR>
    <TD COLSPAN="2" ALIGN="center">
        <INPUT TYPE="submit" VALUE="送出報名">
        <INPUT TYPE="reset" VALUE="重設資料">
    </TD>
</TR>

</TABLE>
</CENTER>

</FORM>

<BR>

<CENTER>
    <A HREF="camp.php">回上一頁</A>
</CENTER>

</BODY>
</HTML>
