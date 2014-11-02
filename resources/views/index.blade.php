<!DOCTYPE html>
<!-- 
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Sean Lim | Academic Performance Predictor</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="MobileOptimized" content="320">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="style-metronic.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="css/coming-soon.css" rel="stylesheet" type="text/css"/>
    <link href="css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="img/favicon.ico"/>
<script type="text/javascript">
    <!--
    function verify_clicks(numberOfSRs, numberOfSPs) {

        var chkBoxCountSR = numberOfSRs.length; // Total number of checkboxes, used in for loop
        var chkBoxCountSP = numberOfSPs.length; // Total number of checkboxes, used in for loop
        var totalSRs=0; // default to zero
        var totalSPs=0; // default to zero
        for (var i = 0; i < chkBoxCountSR; i++) {  // loop through each checkbox
            if (eval("numberOfSRs[" + i + "].checked") == true) { // see if it's checked
                totalSRs += 1; // if so, incriment the counter
            }
        }
        for (var j = 0; j < chkBoxCountSP; j++) {  // loop through each checkbox
            if (eval("numberOfSPs[" + j + "].checked") == true) { // see if it's checked
                totalSPs += 1; // if so, incriment the counter
            }
        }
        var SRscore = totalSRs*10;
        var SPscore = totalSPs*10;
            var atar1 = -8.4016*Math.pow(10,-3) * Math.pow(SPscore,3) + 9.6631 * Math.pow(10,-1) * Math.pow(SPscore,2) - 3.6392 * 10 * SPscore + 5.4059 * Math.pow(10,2);
            var atar2 = 5.0606*Math.pow(10,-3) *Math.pow(SRscore,3) - 4.8379 * Math.pow(10,-1) * Math.pow(SRscore,2) + 1.5375 * 10 * SRscore -7.1078*10;
            var atar = (atar1 + atar2)/2;
            var op = (100 - atar)/10;
            if (totalSPs < 3 || totalSRs < 3)
                alert ('You need to answer at 3 of each reward and punishment questions.');
            else
            document.getElementById("results").innerHTML = "Your predicted ATAR score is: " + parseInt(atar1);
    }
    -->
</script>

<body>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<div class="container">
    <div class="row">
        <div class="col-md-6 coming-soon-content">
            <h1>Welcome to Sean's Academic result predictor!</h1>
            <p>
                We will give you an estimate of your school leaver result after a series of questions that measures your
                sensitivity to punishment and sensitivity to rewards.
                Though we try our best to provide the information with proper research, it is not without inaccuracies.
                At the time of writing, it has been normed with 100 school leavers.
            </p>
            <p>Besides these qualitative analysis, other factors that affect academic performance are not taken into
                consideration in this test.</p>
            <hr>
            {!! Form::open() !!}
                <h4>{!! Form::label('sr', 'Check the questions that are relevant to you:') !!} </h4>
                Sensitivity to Rewards:
                    @foreach($questionsr as $thisquestion)
                        <div class="row">
                            <div class="col-md-1">
                                {!! Form::checkbox('numberOfSRs', '', false, array('id' => 'numberOfSRs')) !!}
                            </div>
                            <div class="col-md-11">
                                {{ $thisquestion->question }}<br />
                            </div>
                        </div>
                        @endforeach
                Sensitivity to Punishments:
                    @foreach($questionsp as $thisquestion)
                        <div class="row">
                             <div class="col-md-1">
                                 {!! Form::checkbox('numberOfSPs', '', false, array('id' => 'numberOfSPs')) !!}
                             </div>
                             <div class="col-md-11">
                                 {{ $thisquestion->question }}<br />
                             </div>
                         </div>
                @endforeach
                <div class="row">
                    <div class="col-md-offset-2">
                        {!! Form::button('Predict My Score', array(
                            'onclick' => 'verify_clicks(numberOfSRs, numberOfSPs)',
                        )) !!} <br />
                        {!! Form::button('Results appear here.', array(
                            'id' => 'results'
                        )) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!--/end row-->
</div>

</body>
</html>