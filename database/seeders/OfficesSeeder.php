<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficesSeeder extends Seeder {
    public function run() {
        // Insert offices
        DB::table('offices')->insert([
            ['name' => 'Office of the University Registrar'],
            ['name' => 'Human Resources Management Office'],
            ['name' => 'Office of the Students Affairs and Services'],
            ['name' => 'University Health Services Unit'],
            ['name' => 'Accounting Office'],
            ['name' => 'Cashier’s Office'],
            ['name' => 'Library Services'],
            ['name' => 'Project Management Office'],
            ['name' => 'Academic Units/Colleges'],
        ]);
    
        // Fetch office IDs (you can use the name or another unique column)
        $offices = DB::table('offices')->whereIn('name', [
            'Office of the University Registrar',
            'Human Resources Management Office',
            'Office of the Students Affairs and Services',
            'University Health Services Unit',
            'Accounting Office',
            'Cashier’s Office',
            'Library Services',
            'Project Management Office',
            'Academic Units/Colleges'
        ])->pluck('id', 'name');
    
        // Insert services and link them to the respective offices
        DB::table('services')->insert([
            ['name' => 'Registration', 'office_id' => $offices['Office of the University Registrar']],
            ['name' => 'Issuance of Academic Records', 'office_id' => $offices['Office of the University Registrar']],
            ['name' => 'Issuance of Diploma', 'office_id' => $offices['Office of the University Registrar']],
    
            ['name' => 'Receiving Job Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Request for Certificate of Employment Service Record', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Request for Copy of Appointment and other Documents', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Request for Authentication of Documents', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Sick Leave Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Special Privilege Leave Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Vacation Leave Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Paternity Leave Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Solo Parent Leave Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Monetization of Leave Credits Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Maternity Leave Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Study Leave Application', 'office_id' => $offices['Human Resources Management Office']],
            ['name' => 'Processing of Terminal Leave Application', 'office_id' => $offices['Human Resources Management Office']],
    
            ['name' => 'Walk-in Counselling Services', 'office_id' => $offices['Office of the Students Affairs and Services']],
            ['name' => 'Issuance of Certificate of Good Moral Character', 'office_id' => $offices['Office of the Students Affairs and Services']],
            ['name' => 'University Admission Testing Application and Issuance of Result', 'office_id' => $offices['Office of the Students Affairs and Services']],
            ['name' => 'Request for Approval of Student’s Activity (In/Out Campus)', 'office_id' => $offices['Office of the Students Affairs and Services']],
    
            ['name' => 'Medical Examination', 'office_id' => $offices['University Health Services Unit']],
            ['name' => 'Issuance of Health Clearance', 'office_id' => $offices['University Health Services Unit']],
            ['name' => 'Medical Consultation and Treatment', 'office_id' => $offices['University Health Services Unit']],
            ['name' => 'Dental Consultation and Treatment', 'office_id' => $offices['University Health Services Unit']],
            ['name' => 'Issuance of Dental Clearance', 'office_id' => $offices['University Health Services Unit']],
            ['name' => 'Issuance/Validation of Certificate of Sickness', 'office_id' => $offices['University Health Services Unit']],
    
            ['name' => 'Request for Statement of Account/Assessment Form', 'office_id' => $offices['Accounting Office']],
            ['name' => 'Application for Refund of School Fees', 'office_id' => $offices['Accounting Office']],
    
            ['name' => 'Cash Disbursement', 'office_id' => $offices['Cashier’s Office']],
            ['name' => 'Check Disbursement', 'office_id' => $offices['Cashier’s Office']],
    
            ['name' => 'Response to Online Clarifications/Inquiry/Request', 'office_id' => $offices['Library Services']],
            ['name' => 'Online Document Delivery Service', 'office_id' => $offices['Library Services']],
            ['name' => 'Issuance of Library Card', 'office_id' => $offices['Library Services']],
            ['name' => 'Validation of Library Card', 'office_id' => $offices['Library Services']],
            ['name' => 'Borrowing of Books', 'office_id' => $offices['Library Services']],
            ['name' => 'Returning of Books', 'office_id' => $offices['Library Services']],
            ['name' => 'Signing of Clearance', 'office_id' => $offices['Library Services']],
            ['name' => 'Request for the use of Facilities (IMC, Zoom, Studio, etc.)', 'office_id' => $offices['Library Services']],
            ['name' => 'Computer Use', 'office_id' => $offices['Library Services']],
            ['name' => 'Printing Services', 'office_id' => $offices['Library Services']],
            ['name' => 'Issuance of Certification/Acknowledgement', 'office_id' => $offices['Library Services']],
            ['name' => 'Inter-library Loan/Use', 'office_id' => $offices['Library Services']],
    
            ['name' => 'Request for Billing', 'office_id' => $offices['Project Management Office']],
            ['name' => 'Request for Repair and Maintenance', 'office_id' => $offices['Project Management Office']],
            ['name' => 'Request for Planning and Design', 'office_id' => $offices['Project Management Office']],
    
            ['name' => 'Issuance of Pre-Enrolment Slip and Evaluation of Grades', 'office_id' => $offices['Academic Units/Colleges']],
            ['name' => 'Student Consultation to Faculty', 'office_id' => $offices['Academic Units/Colleges']],
            ['name' => 'Changing, Adding, and Dropping of Subjects', 'office_id' => $offices['Academic Units/Colleges']],
            ['name' => 'Evaluation of Graduating Students', 'office_id' => $offices['Academic Units/Colleges']],
            ['name' => 'Evaluation of Students for Academic Awards', 'office_id' => $offices['Academic Units/Colleges']],
            ['name' => 'Facilitation of Requests for Academic Related Matters', 'office_id' => $offices['Academic Units/Colleges']],
            ['name' => 'Issuance of Class Cards', 'office_id' => $offices['Academic Units/Colleges']],
            ['name' => 'Administration of Removal Exam', 'office_id' => $offices['Academic Units/Colleges']],
        ]);
    }  
}
