<?php echo Debug::dump($resources); ?>
<?php echo Debug::dump(count($resources[0])); ?>
                <!-- table3 -->
                <table class="main-left" cellspacing="0" cellpadding="0" border="0" style="font-family: Arial, Helvetica, sans-serif; border-right-width: 2px; border-right-color: #b0c0ce; border-right-style: solid;">
                  <tbody>
                    <tr>
                      <td height="0" class="intro-first" width="380" bgcolor="#111f43">
                        <p style="font-size: 14px; color: #fdc578; line-height: 22px; margin-top: 10px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px;">
                          <?=$lead_in;?>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td height="0" class="intro-second" width="400" bgcolor="#b0c0ce">
                        <p style="font-size: 14px; color: #111f43; line-height: 18px; font-weight: bold; margin-top: 3px; margin-right: 20px; margin-bottom: 6px; margin-left: 20px;">
                          <?=$kicker;?>
                        </p>
                      </td>
                    </tr>
                    <tr>
                      <td height="0" width="400" bgcolor="#ffffff">
                        <h2 style="color: #111f43; font-size: 15px; margin-bottom: 0px; margin-left: 20px; margin-right: 20px; margin-top: 10px;">
                          <?=$headline;?>
                        </h2>
                        <?=$main_body?>
                      </td>
                    </tr>
                    <tr>
                      <td height="0" width="400" bgcolor="#ffffff">
                        <!-- table4 -->
                        <?=$poll;?>
                        <!-- end table4 -->
                      </td>
                    </tr>
                    <tr>
                      <td height="0" width="400" bgcolor="#ffffff">
                        <h4 style="margin-top: 0px; margin-right: 20px; margin-bottom: 0px; margin-left: 20px; font-size: 13px;">Resources to Reference</h4>
                        <ul style="font-size: 13px; color: #333333; line-height: 17px; margin-top: 0px; margin-right: 20px;">
                        <?php for ($i = 0; $i < count($resources[0]); $i++): ?>
                          <li>
                            <a 
                              href="<?=$resources[$i]['res_link' . ${$i}]?>" 
                              title="<?=$resources[$i]['res' . ${$i}]?>" 
                              style="color: #111f43;">
                            </a>
                            <?=$resources[$i]['res' . ${$i}]?>
                          </li>
                        <?php endfor; ?>
                        </ul>
                        <p class="emph" style="font-size: 13px; color: #913a20; line-height: 17px; margin-top: 0px; margin-right: 20px; margin-bottom: 10px; margin-left: 20px; padding-bottom: 25px;">Additional resources you find helpful? Other helpful tips for peer reviewers/authors? <a href="mailto:circulation@osteopathic.org?Subject=Connections%20feedback" style="color: #111f43;">Let us know</a>&mdash;we want to hear from you!</p>
                        <br>
                        <br>
                        <br>
                      </td>
                    </tr>
                  </tbody>
                </table><!-- end table3 -->
