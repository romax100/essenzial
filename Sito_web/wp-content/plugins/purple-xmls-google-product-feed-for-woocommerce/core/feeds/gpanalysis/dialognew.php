<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/********************************************************************
 * Version 2.0
 * Front Page Dialog for GoDataFeed
 * Copyright 2014 Purple Turtle Productions. All rights reserved.
 * license    GNU General Public License version 3 or later; see GPLv3.txt
 * By: Keneto 2014-09
 ********************************************************************/
class GPAnalysisDlg extends PBaseFeedDialog
{

    function __construct()
    {
        parent::__construct();
        $this->service_name = 'GPAnalysis';
        $this->service_name_long = 'GPAnalysis XML Feed';
        $this->blockCategoryList = true;
        $this->doc_link = "https://www.exportfeed.com/documentation/gpanalysis-merchant-integration-guide/";
    }

}
