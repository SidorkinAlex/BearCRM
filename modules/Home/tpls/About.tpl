<div class="about" id="about_header">
    <h1><img src="include/images/suite_logo.png" alt="SuiteCRM"></h1>
    <br>
    <b>
        <?php echo $mod_strings['LBL_VERSION'] . ' ' . $suitecrm_version;
        if (is_file('custom_version.php')) {
            include 'custom_version.php';
            echo '&nbsp;&nbsp;&nbsp;' . $custom_version;
        } ?>
    </b>
    <p>
        Sugar <?php echo $mod_strings['LBL_VERSION'] . ' ' . $sugar_version . ' (' . $mod_strings['LBL_BUILD'] . ' ' . $sugar_build . ')'; ?></p>
    <br>
    <h1><?php echo $mod_strings['LBL_CONTRIBUTOR_SUITECRM']; ?></h1>
    <table id="about_table" class="contentBox">
        <tr>
            <td valign="top" style="padding: 15px 10px 15px 10px;">
                <div class="about_suite">
                    <br>
                    <h3><?php echo $mod_strings['LBL_ABOUT_SUITE']; ?></h3>
                    <ul id="about_menu">
                        <li><?php echo $mod_strings['LBL_ABOUT_SUITE_2']; ?></li>
                        <li><?php echo $mod_strings['LBL_ABOUT_SUITE_4']; ?></li>
                        <li><?php echo $mod_strings['LBL_ABOUT_SUITE_5']; ?></li>
                    </ul>
                </div>
                <div class="about_suite">
                    <br>
                    <h3><?php echo $mod_strings['LBL_CONTRIBUTORS']; ?></h3>
                    <ul id="about_menu">
                        <li><?php echo $mod_strings['LBL_FEATURING']; ?>(<a href="http://www.salesagility.com"
                                                                            target="_blank">http://www.salesagility.com</a>)
                        </li>
                        <li><?php echo $mod_strings['LBL_CONTRIBUTOR_SECURITY_SUITE']; ?> (<a
                                    href="http://www.sugaroutfitters.com"
                                    target="_blank">http://www.sugaroutfitters.com</a>)
                        </li>
                        <li><?php echo $mod_strings['LBL_CONTRIBUTOR_JJW_GMAPS']; ?> (<a href="http://www.jjwdesign.com"
                                                                                         target="_blank">http://www.jjwdesign.com</a>)
                        </li>
                        <li><?php echo $mod_strings['LBL_CONTRIBUTOR_CONSCIOUS']; ?> (<a
                                    href="http://www.conscious.co.uk" target="_blank">http://www.conscious.co.uk</a>)
                        </li>
                        <li><?php echo $mod_strings['LBL_CONTRIBUTOR_RESPONSETAP']; ?> (<a
                                    href="https://www.responsetap.com">https://www.responsetap.com</a>)
                        </li>
                        <li><?php echo $mod_strings['LBL_SOURCE_SUGAR']; ?> (<a href="http://www.sugarcrm.com"
                                                                                target="_blank">http://www.sugarcrm.com</a>)
                        </li>
                        <li><?php echo $mod_strings['LBL_CONTRIBUTOR_GMBH']; ?> (<a href="http://www.dtbc.eu/"
                                                                                    target="_blank">http://www.dtbc.eu/</a>)
                        </li>
                    </ul>
                </div>

                <div class="about_suite">
                    <br>
                    <h3><?php echo $mod_strings['LBL_LANGUAGE_ABOUT']; ?></h3>
                    <ul id="about_menu">
                        <li><?php echo $mod_strings['LBL_LANGUAGE_COMMUNITY_ABOUT']; ?>
                        </li>
                        <li><?php echo $mod_strings['LBL_LANGUAGE_COMMUNITY_PACKS']; ?> (<a
                                    href="https://crowdin.com/project/suitecrmtranslations" target="_blank">https://crowdin.com/project/suitecrmtranslations</a>)
                        </li>
                    </ul>
                </div>

                <div class="about_suite">
                    <br>
                    <h3><?php echo $mod_strings['LBL_PARTNERS']; ?></h3>
                    <ul id="about_menu">
                        <li><?php echo $mod_strings['LBL_SUITE_PARTNERS']; ?> (<a
                                    href="https://suitecrm.com/about/about-us/partners">http://suitecrm.com</a>)
                        </li>
                    </ul>
                </div>
        </tr>
    </table>
</div>