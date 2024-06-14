<div class="w-1/4 py-2 space-y-2">
    <nav class="flex flex-col space-y-2 h-1/3 mr-6">
        <div class="border-b border-b-gray-300 py-2">
            <div class="sidebar-header items-center space-x-1">
                <img src="/images/icons/plus-svgrepo-com.svg" class="h-4">
                <span>Add To</span> 
            </div>
        </div>
        <div class="flex flex-col space-y-1">
            <a href="" class="sidebar-sub-header space-x-1 items-center">
                <img src="/images/icons/profile-user-svgrepo-com.svg" class="h-3">
                <span>Employees</span>
            </a>
            {{-- <a href="" class="sidebar-sub-header space-x-1 items-center">
                <img src="/images/icons/inquiry-svgrepo-com.svg" class="h-4">
                <span>Employee Inquiry</span>
            </a>
            <a href="" class="sidebar-sub-header space-x-1 items-center">
                <img src="/images/icons/profile-round-1342-svgrepo-com.svg" class="h-4">
                <span>Employee Master File</span>
            </a>
            <a href="" class="sidebar-sub-header space-x-1 items-center">
                <img src="/images/icons/info-square-svgrepo-com.svg" class="h-4">
                <span>Data Entry Type</span>
            </a> --}}
            <a href="" class="sidebar-sub-header">Edit Browser Type</a>
            <a href="" class="sidebar-sub-header">Salary Table Bracket Premiums</a>
            <a href="{{ route('premium.index') }}"
            class="{{ request()->is('premium') || request()->is('pag-ibig') || request()->is('phil-health') ? 'sidebar-sub-header-active' : 'sidebar-sub-header space-x-1 items-center' }}">
                <img src="/images/icons/wallet-svgrepo-com.svg" class="h-3">
                <span>Premiums</span>
            </a>
            <a href="" class="sidebar-sub-header">P-Health Premiums</a>
            <a href="" class="sidebar-sub-header">Pag-Ibig Premiums</a>
            <a href="" class="sidebar-sub-header">Pag-Ibig Premiums (Per Employee)</a>
            <a href="" class="sidebar-sub-header">With Holding Taxtable</a>
            <a href="" class="sidebar-sub-header">E-Cola Allowance</a>
            <a href="" class="sidebar-sub-header">CTPA Allowance</a>
            <a href="" class="sidebar-sub-header">SEA Allowance</a>
            <a href="" class="sidebar-sub-header">Office Computation Table</a>
            <a href="" class="sidebar-sub-header">Loan Information & Payment Schedule</a>
            <a href="" class="sidebar-sub-header">Schedule of Payment</a>
            <a href="" class="sidebar-sub-header">Salary Rate Increase</a>
            <a href="" class="sidebar-sub-header">Salary Increase Base on Type</a>
            <a href="" class="sidebar-sub-header">Salary Increase Base on Daily Rate</a>
            <a href="" class="sidebar-sub-header">Payroll Calendar</a>
            <a href="" class="sidebar-sub-header">Company Signatory</a>
            <a href="" class="sidebar-sub-header">Payroll Setup and References</a>
            <a href="" class="sidebar-sub-header">Product Master File</a>
            <a href="" class="sidebar-sub-header">No-Premiums Employee</a>
            <a href="" class="sidebar-sub-header">No-Tax Employee</a>
            <a href="" class="sidebar-sub-header">Tax Level</a>
            <a href="" class="sidebar-sub-header">Employee w/ Incentives</a>
            <a href="" class="sidebar-sub-header">Payroll Groupings</a>
        </div>
        <div class="border-b border-b-gray`-300 py-2">
            <span class="sidebar-header">Transaction</span>
        </div>
        <div class="flex flex-col space-y-1">
            <a href="" class="sidebar-sub-header">Plant Weekly Payroll</a>
            <a href="" class="sidebar-sub-header">Office Semi-Monthly Payroll</a>
            <a href="" class="sidebar-sub-header">Office Semi-Monthly Payroll (Grosspay)</a>
            <a href="" class="sidebar-sub-header">Office Monthly Premiums</a>
            <a href="" class="sidebar-sub-header">Office Monthly Premiums (Actual Rate)</a>
            <a href="" class="sidebar-sub-header">Payroll Browser Type</a>
            <a href="" class="sidebar-sub-header">Payroll Back-Pay</a>
            <a href="" class="sidebar-sub-header">Payroll pre Transaction (XLS)</a>
            <a href="" class="sidebar-sub-header">Payroll Other Transaction (UNION)</a>
            <a href="" class="sidebar-sub-header">Payroll Transaction Checking</a>
            <a href="" class="sidebar-sub-header">Salary Increase (Base on Grade)</a>
            <a href="" class="sidebar-sub-header">Salary Increase (Base on Drate)</a>
            <a href="" class="sidebar-sub-header">Leave/Absence Entry</a>
            <a href="" class="sidebar-sub-header">Bank Transfer Combine</a>
            <a href="#" class="sidebar-sub-header">Loyaly Award Entry</a>
        </div>
        <div class="border-b border-b-gray-300 py-2">
            <span class="sidebar-header">Reports</span>
        </div>
        <div class="flex flex-col space-y-1">
            <a href="#" class="sidebar-sub-header">Management Summary Report</a>
            <a href="#" class="sidebar-sub-header">Payroll Register</a>
            <a href="#" class="sidebar-sub-header">Payroll Other Earnings & Deductions</a>
            <a href="#" class="sidebar-sub-header">Payroll Register (XLS - Consolidated)</a>
            <a href="#" class="sidebar-sub-header">Payroll Register (XLS - For Office Backpay)</a>
            <a href="#" class="sidebar-sub-header">Payroll Pay Slip</a>
            <a href="#" class="sidebar-sub-header">Payroll Weekly Special Report</a>
            <a href="#" class="sidebar-sub-header">Payroll Consolidation per Week</a>
            <a href="#" class="sidebar-sub-header">Asia United Bank Reports</a>
            <a href="#" class="sidebar-sub-header">AUB Monthly Salary Loan Report</a>
            <a href="#" class="sidebar-sub-header">AUB Statement and Bank Diskette</a>
            <a href="#" class="sidebar-sub-header">SSS Premiums & Loans</a>
        </div>
        <div class="border-b border-b-gray-300 py-2">
            <span class="sidebar-header">Publish</span>
        </div>
        <div class="flex flex-col space-y-1">
            <a href="#" class="sidebar-sub-header">Post Payroll Transaction New</a>
            <a href="#" class="sidebar-sub-header">Post Monthly Premiums (Certification & SMEC)</a>
        </div>
        <div class="border-b border-b-gray-300 py-2">
            <span class="sidebar-header">Un-Publish</span>
        </div>
        <div class="flex flex-col space-y-1">
            <a href="#" class="sidebar-sub-header">Un-Post Payroll Transaction</a>
            <a href="#" class="sidebar-sub-header">Un-Post Monthly Premiums</a>
        </div>
    </nav>
</div>