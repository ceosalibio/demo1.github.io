<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function getEmployeeInfo(request $request){
        // return \DB::table('employees')
        //         ->select(
        //             'EmployeeName',
        //             'DepartmentName',
        //             'DepartmentCode',
        //             'SectionName',
        //             'SectionCode',
        //             'TeamName',
        //             'TeamCode',
        //         )
        //         ->where('id_no',$request->EMPNO)
        //         ->get();
            $getData =  \DB::connection('hrdsql')->table('Employees')
                  ->select(
                        'Employees.EmployeeName',
                        'Employees.EmployeeCode',
                        'Employees.DepartmentCode',
                        'Employees.SectionCode',
                        'Employees.TeamCode',
                        'Employees.DesignationCode',
                        'Departments.DepartmentName',
                        'Sections.SectionName',
                        'Teams.TeamName',
                        'Designations.DesignationName'


                    )
                    ->leftjoin('Departments','Departments.DepartmentCode','Employees.DepartmentCode')
                    ->leftjoin('Sections','Sections.SectionCode','Employees.SectionCode')
                    ->leftjoin('Teams','Teams.TeamCode','Employees.TeamCode')
                    ->leftjoin('Designations','Designations.DesignationCode','Employees.DesignationCode')
                    ->where('EmployeeCode',$request->EMPNO)
                    ->whereNull('RetiredDate')
                    ->get();

            return $getData;
    }

    public function storeUserdata(request $request){
        // return $request;
         $clientIP = \Request::ip();
            return  $insert = \DB::connection('user')->table('im_user')
                ->Insert([
                    'ipaddress' => $clientIP,
                    'EmployeeCode' => $request->EmpCode,
                    'EmployeeName' => $request->EmpName,
                    'CodeName' => $request->EmpEcode,
                    'NickName' => $request->EmpNick,
                    'DepartmentCode' => $request->EmpDeptCode,
                    'DepartmentName' => $request->EmpDept,
                    'SectionCode' => $request->EmpSecCode,
                    'SectionName' => $request->EmpSec,
                    'TeamCode' => $request->EmpTeamCode,
                    'TeamName' => $request->EmpTeam,
                    'DesignationCode' => $request->EmpDesigCode,
                    'DesignationName' => $request->EmpDesig,
                    'Process'=> $request->PAprocess

                ]);
                //->save();
    }

    public function ExistEmployee(request $request){
        // return $request;
        return $CheckExist =  \DB::connection('user')->table('im_user')
                ->where('EmployeeCode',$request->EMPNO)
                ->get();
    }

    public function getAllUser(Request $request){
        return $data = \DB::connection('user')->table('im_user')
                ->select('EmployeeName','EmployeeCode','CodeName','NickName','inUse','TeamCode','TeamName')
                ->where('TeamCode',$request->data)
                ->get();
    }

    public function getInUse(Request $request){
        
                $clientIP = \Request::ip();
         return $inUse = \DB::connection('user')->table('im_user')
                ->where('EmployeeCode',$request->employee_code)
                ->update([
                    'inUse' => $clientIP
                ]);
    }

    public function getLogin(Request $request){
        
                $employee =  \DB::connection('user')->table('im_user')
                ->where('EmployeeCode',$request->employee_code)
                ->get();
                return $employee;
    }

    public function getLogout(Request $request){
        // return $request;
       return $inUse = \DB::connection('user')->table('im_user')
        ->where('EmployeeCode',$request->id)
        ->update([
            'inUse' => null
        ]);
    }

    public function getProcess(Request $request){
        $teamCode = $request->teamCode;
        $sectionCode = $request->sectionCode;
        if ($request->designationCode == '3' || $request->designationCode == '647' || $request->designationCode == '646'){
            $filterWhere = "SectionCode = '$sectionCode' ";
        } else {
            $filterWhere = "TeamCode = '$teamCode' ";
        }
        return  $team =  \DB::connection('user')->table('dept_process')
                ->select('ProcessName')
                ->where('DepartmentCode',$request->deptCode)
                ->whereRaw("$filterWhere")
                ->where('Status','Available')
                ->get();
    }

    public function displayImage($filename){
        $path = storage_public('images/' . $filename);
    
        if (!File::exists($path)) {
            abort(404);
        }
    
        $file = File::get($path);
        $type = File::mimeType($path); 
    
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
    
        return $response;
    }
}
