<!DOCTYPE html>
<html>
    <head>
        <title>JQueryAssignment 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Property Image
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                Property Image
                            </div>
                            <div class="col-sm-8">
                                <div class="row" style="margin:10px -20px 10px 10px;">
                                    <div class="col-sm-3">
                                        <input type="text"/>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="file"/>
                                    </div>
                                    <div class="col-sm-2">
                                        <select onchange="changeImageType(this);">
                                            <option value="0">Primary Image</option>
                                            <option value="1">Secondary Image</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <button onclick="removeRow(this);" class="btnRemove">Remove</button>
                                    </div>
                                </div>
                                <div class="row" id="addbtnrow">
                                    <div class="col-sm-12">
                                        <button id="btn1" class="btnAdd" onclick="addRow(this)">Add Another</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer" style="text-align: right;">
                        <small >-Submitted by <a href="https://www.linkedin.com/in/gaurav-kumar-a3a840a9/">Gaurav</a></small>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>