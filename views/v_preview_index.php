<!--
table1  - main wrapping table [1]
table2  - wraps main, sidebar [9]
table3  - wraps lead_in [17]
table4  - wraps poll [25]
table5  - wraps meet your peer [17]
table6  - wraps footer [9]
table7  - wraps footer inside [17]

table1
        table2
                table3
                        table4
                table5
        table6
                table7

-->

<!-- table1 -->
<table class="wrapper" width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: Arial, Helvetica, sans-serif;">
  <tbody>
    <tr>
      <td height="0" align="center">
        <!-- table2 -->
        <table class="main" width="612" cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; border-bottom-width: 4px; border-bottom-color: #913a20; border-bottom-style: solid;">
          <tbody>
            <tr>
              <td height="0" width="612" align="left" valign="top" colspan="2"><a href="http://www.jaoa.org/" title="JAOA mdash;mdash; The Journal of the American Osteopathic Association: Connections Newsletter" style="color: #111f43;"><img src="http://aoa-do.informz.net/aoa-do/data/images/connections/jaoa-flag-eb.gif" alt="JAOA flag" width="612" height="135" style="border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none;" title="JAOA flag"></a></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="0" width="612" align="left" valign="bottom" colspan="2"><img src="http://aoa-do.informz.net/aoa-do/data/images/connections/connections-fall-2013.gif" alt="Connections" width="612" height="33" title="Connections - *QUARTER-YEAR*"></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="0" width="370" align="left" valign="top">
                <!-- table3 -->
                <?=$main;?>
                <!-- end table3 -->
              </td><!-- end "main-left" -->

              <!-- *** SIDEBAR *** -->
              <td height="0" width="212" align="left" valign="top">
                <!-- table5 -->
                <?=$peer;?>
                <!-- end table5 -->
              </td><!-- end "sidebar" -->
            </tr>
          </tbody>
        </table> <!-- end table2 -->
      </td><!-- end "main" --><!-- *** FOOTER *** -->
    </tr>
    <tr>
      <td height="0" align="center">
        <!-- table6 -->
        <?=$footer;?>
        <!-- end table6 -->
      </td>
    </tr>
  </tbody>
</table> <!-- end table1 -->
