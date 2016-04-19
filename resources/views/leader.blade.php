@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Leader</div>

                <div class="panel-body">
                    <table border="0" cellspacing="0" cellpadding="0">
        			<thead>
			          <tr>
			            <th class="no">S.no</th>
			            <th class="desc">User</th>
			            <th class="unit">level</th>
			          </tr>
			        	</thead>
			        	<tbody>
			          @foreach ($users as $index => $user)
			          	<tr>
			            <td class="no">{{$index +1}}</td>
			            <td class="desc"><h5>{{$user[$index]}}</h5></td>
			            <td class="unit">{{$userl[$index]}}</td>
			          	</tr>
			          @endforeach
			        </tbody>
			      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection