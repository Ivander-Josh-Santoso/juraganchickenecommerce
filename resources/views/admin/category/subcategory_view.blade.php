@extends('admin.admin_master')
@section('content')

		<section class="content">
		  <div class="row">

			<div class="col-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">SubCategory List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Category</th>
								<th>SubCategory En</th>
								<th>SubCategory Ind</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($subcategory as $item)
							<tr>
								<td>{{ $item->category->category_name_en }}</td>
								<td>{{ $item->subcategory_name_en }}</td>
								<td>{{ $item->subcategory_name_ind }}</td>
								<td>
									<a href="{{ route('subcategory.edit',$item->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
									<a href="{{ route('subcategory.delete',$item->id) }}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
						
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			        
			</div>
			<!-- /.col -->


			<div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add SubCategory</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  
						<form method="post" action="{{ route('subcategory.store') }}">
							@csrf
							<div class="col-12">
									<div class="form-group">
										<h5>Category<span class="text-danger">*</span></h5>
										<div class="controls">
											<select name="category_id" class="form-control">
												<option selected="" disabled="">-- Pilih Category --</option>
												@foreach($categoies as $category)
												<option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
												@endforeach
											</select>
											@error('category_id')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>

									<div class="form-group">
										<h5>SubCategory Name En <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="subcategory_name_en" class="form-control">
											@error('subcategory_name_en')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>

									<div class="form-group">
										<h5>SubCategory Name Ind <span class="text-danger">*</span></h5>
										<div class="controls">
											<input type="text" name="subcategory_name_ind" class="form-control">
											@error('subcategory_name_ind')
												<span class="text-danger">{{ $message }}</span>
											@enderror
										</div>
									</div>

									<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add SubCategory">
						</div>
								</div>

						</form>

					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			        
			</div>
			<!-- /.col -->
		  </div>
	  </div>
  </div>
  <!-- /.content-wrapper -->


@endsection