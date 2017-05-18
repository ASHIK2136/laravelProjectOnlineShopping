@extends('admin.master')
@section('body')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center text-white">{{Session::get('message')}}</h3>

            </div>
            <div class="panel-body">
                <table width='100%' class="table-bordered table-striped table-hover">
                    <thead>
                    <th>SL No</th>
                    <th>Slider Image</th>
                    <th>Publication Status</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                     @foreach($sliders as $Slider)
                     <tr class="odd gradeX">
                       <td>{{$i++}}</td>
                       <td>{{$Slider->sliderImage}}</td>
                       <td>{{$Slider->publicationStatus==1?'Published':'Unpublished'}}</td>
                       <td class="center">
                           <a href="{{url('/editSliderImage/').$Slider->id}}" class="btn btn-success" title="Edit">
                        <span class="glyphicon glyphicon-edit"></span>
                        </a>
                           <a href="{{url('/deleteSliderImage/').$Slider->id}}" class="btn btn-danger" title="Delete">
                        <span class="glyphicon glyphicon-trash"></span>
                        </a>
                       
                       
                       </td>
                     </tr>
                    @endforeach
                    
                    
                    </tbody>

                </table>
            </div>
        </div>

    </div>

</div>
@endsection