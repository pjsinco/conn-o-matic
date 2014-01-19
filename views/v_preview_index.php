<div class="etoc_wrapper prefix_2 grid_8">
  
  <div id="etoc">
    
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
    <table class="wrapper" width="100%" border="0" bgcolor='#ffffff' cellspacing="0" cellpadding="0" style="font-family: Arial, Helvetica, sans-serif;">
      <tbody>
        <tr>
          <td height="0" align="center">
            <!-- table2 -->
            <table class="content" width="612" cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; border-bottom-width: 4px; border-bottom-color: #913a20; border-bottom-style: solid;">
              <tbody>
                <tr>
                  <td class='selectable' id='connections_flag' height="0" width="612" align="left" valign="top" colspan="2">
                    <a href="http://www.jaoa.org/" title="JAOA--The Journal of the American Osteopathic Association: Connections Newsletter: <?=$connections_date?>" style="color: #111f43;">
                      <img src="<?=$connections_flag?>" alt="JAOA flag" width="612" height="135" style="border-top-style: none; border-right-style: none; border-bottom-style: none; border-left-style: none;" title="JAOA flag">
                    </a>
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class='selectable' id='connections_edition_flag' height="0" width="612" align="left" valign="bottom" colspan="2"><img src="<?=$connections_quarter_flag?>" alt="Connections" width="612" height="33" title="Connections - <?=$connections_quarter?>"></td>
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
  </div> <!-- end etoc -->
</div> <!-- end .etoc_wrapper prefix_2 grid_8 -->
<?=$control_panel_preview?>
<!-- <div id='res_modify'> -->
<!--   <img src="/css/images/add.gif" alt=""> -->
<!--   <img src="/css/images/delete.gif" alt=""> -->
<!-- </div> -->

<div id='connections_flag_edit' class="dialog-form" title='Edit edition'>
  <?=$connections_flag_edit?>
</div>

<div id='connections_quarter_edit' class="dialog-form" title='Edit date'>
  <?=$connections_quarter_edit?>
</div>

<div id='lead_in_edit' class="dialog-form" title='Edit lead-in'>
  <?=$lead_in_edit?>
</div>

<div id="kicker_edit" class="dialog-form" title='Edit kicker'>
  <?=$kicker_edit?>
</div>

<!-- <div id="headline_edit" class="dialog-form" title='Edit headline'> -->
  <?//=$headline_edit?>
<!-- </div> -->

<div id="main_body_edit" class="dialog-form" title='Edit main body text'>
  <?=$main_body_edit?>
</div>

<div id="poll_edit" class="dialog-form" title='Edit poll'>
  <?=$poll_edit ?>
</div>

<!-- <div id="resources_modal" class="dialog-form" title='Resource'> -->
  <?//=$resources_modal ?>
<!-- </div> -->

<div id="resources_edit" class="dialog-form" title='Edit resource'>
  <?=$resources_edit ?>
</div>

<div id="resources_create" class="dialog-form" title='Create resource'>
  <?=$resources_create?>
</div>

<div id="resources_delete_modal" class="dialog-form" title='Delete resource'>
  <p><span class='ui-icon ui-icon-alert' style="float: left; margin: 0px 7px 20px 0px; position: relative; top: 2px;"></span>Are you sure you want to delete this resource?</p>
  <?//=$resources_delete_modal?>
</div>

<div id="peer_edit" class="dialog-form" title="Edit 'Meet Your Peer'">
  <?=$peer_edit ?>
</div>
