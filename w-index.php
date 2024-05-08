<?php
defined('BASEPATH') OR exit('Access Denied');

/**
 * @fileName index
 * @author Ameer <amirsanni@gmail.com>
 * @date 10-Dec-2016
 */
$sessions = range(date('Y'), 2010);
?>
<script>
    var programmeStudents = <?=json_encode($programme_students);?>;
</script>

<div class="box hidden-print">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-flask"></i> <?=$this->lang->line('panel_title')?></h3>

        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active">Transcript</li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12 text-center margin-bottom-5" id="transcriptMsg"></div>

            <div class="col-sm-12">                        
                <div class="col-sm-3 form-group-sm">
                    <label class="control-label">Select Programme</label>
                    <select class="form-control" id="selTransProgramme">
                        <option value="">Select Programme</option>

                        <?php foreach($programmes as $programme_id=>$programme_name):?>
                        <option value="<?=$programme_id?>"><?=$programme_name?></option>
                        <?php endforeach;?>
                    </select>
                    <span id="selTransProgrammeErr" class="help-block errMsg"></span>
                </div>

                <div class="col-sm-3 form-group-sm">
                    <label class="control-label">Student</label>
                    <select class="form-control" id="selTransStudentId">
                        <option value="">Select Student</option>
                    </select>
                    <span id="selTransStudentIdErr" class="help-block errMsg"></span>
                </div>

                <div class="col-sm-3 form-group-sm">
                    <label class="control-label">Session</label>
                    <select class="form-control" id="selTransSession">
                        <option value="">Select Session</option>

                        <?php foreach($sessions as $session):?>
                        <option value="<?=$session.'/'.($session+1)?>"><?=$session.'/'.($session+1)?></option>
                        <?php endforeach;?>
                    </select>
                    <span id="selTransSessionErr" class="help-block errMsg"></span>
                </div>
                
                <div class="col-sm-3 form-group-sm">
                    <label class="control-label">Graduation Date</label>
                    <input type="text" id="selTransGradDate" class="form-control" placeholder="e.g. July, 2016">
                    <span id="selTransGradDateErr" class="help-block errMsg"></span>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group-sm text-center">
                        <button class="btn btn-primary btn-sm" id="vTranscript">View Transcript</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   
<div class="box">
    <div class="box-body">
        <div class="row" id="displayTranscript"></div>
    </div>
</div>

<script src="<?=base_url()?>assets/js/transcript.js"></script>