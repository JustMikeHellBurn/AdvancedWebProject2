<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          dashboard_footer.php
    Description:        This page is included in all dashboard pages. It calls some needed js files and holds most information
                        consistent across pages. All social links for Justin and Michael are placed in the footer. 
						It also closes the database connection.
    Last Modified Date: 2014/04/13
*/
?>
	</div> <!-- Content -->
 
	<div id="footer">
        <div id="michael-footer" class="social-links">
            <a href="http://www.michaelburnie.com/"><h3>Michael</h3></a>
            <a href="https://www.facebook.com/michael.burnie.12" class="facebook-32"></a>
            <a href="https://twitter.com/mburnie91" class="twitter-32"></a>
            <a href="http://www.linkedin.com/pub/michael-burnie/52/a69/984" class="linkedin-32"></a>
            <a href="https://github.com/Nyaxite" class="github-32"></a>
        </div>
        <div id="justin-footer" class="social-links">
            <a href="http://justinhellsten.com/"><h3>Justin</h3></a>
            <a href="https://www.facebook.com/justin.hellsten" class="facebook-32"></a>
            <a href="https://twitter.com/JustinHellsten" class="twitter-32"></a>
            <a href="http://www.linkedin.com/pub/justin-hellsten/4b/178/436" class="linkedin-32"></a>
            <a href="https://github.com/JustinHue" class="github-32"></a>
        </div>
        <div id="copyright">
            <p>Copyright © 2014 | <a href="http://michaelburnie.com/" />Michael Burnie</a> & <a href="http://justinhellsten.com/" />Justin Hellsten</a></p>
        </div>
    </div>

	<!-- Scripts -->
	<script language="javascript" type="text/javascript" src="../js/footer.js"></script>

</body>
</html>
<?php
	mysqli_close($dbc);//close the database connection
?>
