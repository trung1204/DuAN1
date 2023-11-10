<?php 
    $html_dssp_new='';
    foreach ($dssp_new as $sp){
        extract($sp);
        $html_dssp_new.='<TR>
        <TD BACKGROUND="fade.gif">
            &middot;
                <A HREF="chapterone.qodeinteractive.com/index.html">
                    ChapterOne &#8211; Bookstore and Publisher Theme
                </A>		
        </TD>
    </TR>';
    }
    $html_dssp_best='';
    foreach ($dssp_best as $sp){
        extract($sp);
        if($bestseller==1){
            $best=' <A HREF="chapterone.qodeinteractive.com/index.html">';
        }else{
            $best='';
        }
        $html_dssp_best.='<TR>
            '.$best.'
        <TD BACKGROUND="fade.gif">
            &middot;
                <A HREF="chapterone.qodeinteractive.com/index.html">
                    ChapterOne &#8211; Bookstore and Publisher Theme
                </A>		
        </TD>
    </TR>';
    }
    $html_dssp_best='';
    foreach ($dssp_view as $sp){
        extract($sp);
        if($bestseller==1){
            $best=' <A HREF="chapterone.qodeinteractive.com/index.html">';
        }else{
            $best='';
        }
        $html_dssp_view.='<TR>
            '.$best.'
        <TD BACKGROUND="fade.gif">
            &middot;
                <A HREF="chapterone.qodeinteractive.com/index.html">
                    ChapterOne &#8211; Bookstore and Publisher Theme
                </A>		
        </TD>
    </TR>';
    }
?>
<meta name="generator" content="HTTrack Website Copier/3.x">
	<TITLE>Local index - HTTrack</TITLE>
</HEAD>
<BODY>
<H1 ALIGN=Center>Index of locally available sites:</H1>
<?=$html_dssp_best?>
	<!-- <TABLE BORDER="0" WIDTH="100%" CELLSPACING="1" CELLPADDING="0">
		<TR>
			<TD BACKGROUND="fade.gif">
				&middot;
					<A HREF="chapterone.qodeinteractive.com/index.html">
						ChapterOne &#8211; Bookstore and Publisher Theme
					</A>		
			</TD>
		</TR>
	</TABLE> -->
    <?=$html_dssp_new?>
	<BR>
	<BR>
	<BR>
  	<H6 ALIGN="RIGHT">
	<I>Mirror and index made by HTTrack Website Copier [XR&amp;CO'2008]</I>
	</H6>
	<!-- Mirror and index made by HTTrack Website Copier/3.49-2 [XR&CO'2014] -->
	<!-- Thanks for using HTTrack Website Copier! -->
	<meta HTTP-EQUIV="Refresh" CONTENT="0; URL=chapterone.qodeinteractive.com/index.html">

