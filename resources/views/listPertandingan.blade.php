@extends('layouts.noNav')
@section('title')
  List Pertandingan
@endsection
@section('navbar')
  <li><a href="/register">Register Admin</a></li>
@endsection
@section('headerwrap')
  <br><br><br>
  <div class="container">
    <div class="row">


      <table class="table table-responsive table-stripped table-hover" >
    	<thead>
    		<tr>
    			<th>
    				No
    			</th>
    			<th>
    				Tanggal
    			</th>
    			<th>
    				Nama Pertandingan
    			</th>
    			<th>
    				Stadion
    			</th>
    			<th>

    			</th>
    		</tr>
    	</thead>
    	<tbody

        @foreach ($list as $list1)


    		<tr>
    			<td>
    				{{$list1->ID_PERTANDINGAN}}
    			</td>
    			<td>
    				{{$list1->TANGGAL_PERTANDINGAN}}
    			</td>
    			<td>
    				{{$list1->NAMA_PERTANDINGAN}}
    			</td>
    			<td>
    				{{$list1->NAMA_STADION}}
    			</td>
    			<td>
            <a href="/listPertandingan/{{$list1->ID_PERTANDINGAN}}" class="btn btn-theme">Details!</a>
    			</td>
    		</tr>

        @endforeach



    	</tbody>
    </table>


    </div>
  </div><! --/container -->

@endsection
