<?php
namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
class CompanyCRUDController extends Controller
{
// Display a listing of the resource.

public function index()
{
$data['companies'] = Company::orderBy('id','desc')->paginate(5);
return view('index', $data);
}
// Show the form for creating a new resource.

public function create()
{
return view('create');
}

// Store a newly created resource in storage.

public function store(Request $request)
{
$validator = validator::make( $request->all(),[
'first_name' => 'required',
'last_name' => 'required',
'contact_num' => 'required',
'user_name' => 'required',
'email' => 'required',
'select_company' => 'required',
'user_type' => 'required'
]);
if( $validator->passes()){
$company = new Company;
$company->first_name = $request->first_name;
$company->last_name = $request->last_name;
$company->contact_num = $request->contact_num;
$company->user_name = $request->user_name;
$company->email = $request->email;
$company->select_company = $request->select_company;
$company->user_type = $request->user_type;

$company->save();
return redirect()->route('companies.index')
->with('success','Company has been created successfully.');
}
else{
    return redirect()->route('companies.create')->withErrors($validator)->withInput();
}
}
//  Display the specified resource.
public function show(Company $company){
    return view('show',compact('company'));
    }

    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $company = company::find($id);
        // print_r($data);
    // return response($data)->with('edit');
    // print_r($company);
    return view('edit',compact('company'));
    }

// Update the specified resource in storage.
public function update(Request $request, $id)
{
// $request->validate([
//     'first_name' => 'required',
//     'last_name' => 'required',
//     'contact_num' => 'required',
//     'user_name' => 'required',
//     'email' => 'required',
//     'select_company' => 'required',
//     'user_type' => 'required'
// ]);
$company = Company::find($id);
$company->first_name = $request->first_name;
$company->last_name = $request->last_name;
$company->contact_num = $request->contact_num;
$company->user_name = $request->user_name;
$company->email = $request->email;
$company->select_company = $request->select_company;
 $company->user_type = $request->user_type;
$company->update();
return redirect()->route('companies.index')
->with('success','Company Has Been updated successfully');
}
// Remove the specified resource from storage.

public function destroy(Company $company)
{
$company->delete();
return redirect()->route('companies.index')
->with('success','Company has been deleted successfully');
}
}
