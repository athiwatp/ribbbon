<?php # /app/views/clients/index.blade.php  ?>
@extends('templates/hud_master')

@section('content')

<div class="row">
	<div class="col-xs-12">
		<div class="app-wrapper">
            <div>
                <h2 class="pull-left no-margin-top">Clients</h2>
                <form class="pull-right" action="/clients/create" method="get">
                    <div class="form-group">
                            <ul class="list-inline">
                                <li><input class="form-control" type="text" name="name" placeholder="Client Name"/></li>
                                <li><input class="btn btn-default" type="submit" value="Create Client"/></li>
                            </ul>
                    </div>
                </form>
            </div>

			<table class="table">
				<thead>
					<tr>
                        <td>
                            <a class="pull-left" href="">Name</a>
                            <ul class="pull-right list-inline">
                                <li><a title="edit this client" href=""><i class="fa fa-magic"></i></a></li>
                                <li><a title="view this client" href=""><i class="fa fa-eye"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="pull-left" href="">Name</a>
                            <ul class="pull-right list-inline">
                                <li><a title="edit this client" href=""><i class="fa fa-magic"></i></a></li>
                                <li><a title="view this client" href=""><i class="fa fa-eye"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="pull-left" href="">Name</a>
                            <ul class="pull-right list-inline">
                                <li><a title="edit this client" href=""><i class="fa fa-magic"></i></a></li>
                                <li><a title="view this client" href=""><i class="fa fa-eye"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="pull-left" href="">Name</a>
                            <ul class="pull-right list-inline">
                                <li><a title="edit this client" href=""><i class="fa fa-magic"></i></a></li>
                                <li><a title="view this client" href=""><i class="fa fa-eye"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a class="pull-left" href="">Name</a>
                            <ul class="pull-right list-inline">
                                <li><a title="edit this client" href=""><i class="fa fa-magic"></i></a></li>
                                <li><a title="view this client" href=""><i class="fa fa-eye"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </td>
                    </tr>
				</thead>
			</table>
	</div>
</div>

@stop()


