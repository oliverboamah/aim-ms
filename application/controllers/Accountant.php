<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Accountant extends CI_Controller
{
    public function index()
    {
        $this->load->view('accountant/index');
    }

    public function logout()
    {
        $this->session->unset_userdata('staff_id');
        redirect('');
    }

    public function staff()
    {
        $data = array(
            'staff' => $this->StaffModel->all(),
        );
        $this->load->view('accountant/staff', $data);
    }

    public function suppliers()
    {
        $data = array(
            'suppliers' => $this->SupplierModel->all(),
        );
        $this->load->view('accountant/suppliers', $data);
    }

    public function consumers()
    {
        $data = array(
            'consumers' => $this->ConsumerModel->all(),
        );
        $this->load->view('accountant/consumers', $data);
    }
    public function stock()
    {
        $data = array(
            'stock' => $this->StockModel->all(),
            'suppliers' => $this->SupplierModel->all(),
        );
        $this->load->view('accountant/stock', $data);
    }
    public function loading()
    {
        $data = array(
            'loadings' => $this->LoadingModel->all(),
        );
        $this->load->view('accountant/loadings', $data);
    }

    public function accounts_section()
    {
        $this->load->view('accountant/accounts_section');
    }

    public function staff_transactions()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(1, $current_year),
            'feb_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(2, $current_year),
            'mar_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(3, $current_year),
            'apr_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(4, $current_year),
            'may_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(5, $current_year),
            'jun_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(6, $current_year),
            'jul_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(7, $current_year),
            'aug_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(8, $current_year),
            'sep_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(9, $current_year),
            'oct_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(10, $current_year),
            'nov_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(11, $current_year),
            'dec_total_amount' => $this->StaffTransactionModel->get_total_amount_sent(12, $current_year),
            'transactions' => $this->StaffTransactionModel->all(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('accountant/staff_transactions', $data);
    }

    public function salary()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->SalaryModel->get_amount_recorded(1, $current_year),
            'feb_total_amount' => $this->SalaryModel->get_amount_recorded(2, $current_year),
            'mar_total_amount' => $this->SalaryModel->get_amount_recorded(3, $current_year),
            'apr_total_amount' => $this->SalaryModel->get_amount_recorded(4, $current_year),
            'may_total_amount' => $this->SalaryModel->get_amount_recorded(5, $current_year),
            'jun_total_amount' => $this->SalaryModel->get_amount_recorded(6, $current_year),
            'jul_total_amount' => $this->SalaryModel->get_amount_recorded(7, $current_year),
            'aug_total_amount' => $this->SalaryModel->get_amount_recorded(8, $current_year),
            'sep_total_amount' => $this->SalaryModel->get_amount_recorded(9, $current_year),
            'oct_total_amount' => $this->SalaryModel->get_amount_recorded(10, $current_year),
            'nov_total_amount' => $this->SalaryModel->get_amount_recorded(11, $current_year),
            'dec_total_amount' => $this->SalaryModel->get_amount_recorded(12, $current_year),
            'salaries' => $this->SalaryModel->all(),
            'office_managers' => $this->StaffModel->get_office_managers(),

            'total_salary_paid_cedis' => $this->SalaryModel->total_salary_paid_cedis(),

			'total_salary_paid_rupees' => $this->SalaryModel->total_salary_paid_rupees(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('accountant/salary', $data);
    }

	public function home_expenses()
	{
		$current_year = date("Y");
		$staff_id = $this->session->userdata('staff_id');
		
		$data = array(
			'jan_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 1, $current_year),
			'feb_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 2, $current_year),
			'mar_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 3, $current_year),
			'apr_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 4, $current_year),
			'may_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 5, $current_year),
			'jun_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 6, $current_year),
			'jul_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 7, $current_year),
			'aug_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 8, $current_year),
			'sep_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 9, $current_year),
			'oct_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 10, $current_year),
			'nov_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 11, $current_year),
			'dec_total_amount' => $this->HomeExpensesModel->get_amount_recorded_for_one($staff_id, 12, $current_year),
			'expenses' => $this->HomeExpensesModel->all(),
		);

		$data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
			$data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
			$data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
			$data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

		$this->load->view('accountant/home_expenses', $data);
	}

	public function other_expenses()
	{
		$current_year = date("Y");
		$staff_id = $this->session->userdata('staff_id');
		
		$data = array(
			'jan_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  1, $current_year),
			'feb_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  2, $current_year),
			'mar_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  3, $current_year),
			'apr_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  4, $current_year),
			'may_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  5, $current_year),
			'jun_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  6, $current_year),
			'jul_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  7, $current_year),
			'aug_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  8, $current_year),
			'sep_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  9, $current_year),
			'oct_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  10, $current_year),
			'nov_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  11, $current_year),
			'dec_total_amount' => $this->OtherExpensesModel->get_amount_recorded_for_one($staff_id,  12, $current_year),
			'expenses' => $this->OtherExpensesModel->all(),
		);

		$data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
			$data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
			$data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
			$data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

		$this->load->view('accountant/other_expenses', $data);
	}

    public function staff_accounts($staff_transaction_id)
    {
        $data = array(
            'total_amount_recieved' => $this->StaffTransactionModel->find_row(
                array('staff_transaction_id' => $staff_transaction_id))->amount,
            'balance' => $this->StaffTransactionModel->find_row(
                array('staff_transaction_id' => $staff_transaction_id))->balance,
            'total_amount_used' => $this->StaffAccountModel->get_total_amount_used($staff_transaction_id),
            'user' => $this->StaffTransactionModel->get_user($staff_transaction_id),
            'accounts' => $this->StaffAccountModel->find($staff_transaction_id),
        );
        $this->load->view('accountant/staff_accounts', $data);
    }

    public function transact_to_staff()
    {
        $data = array(
            'staff' => $this->StaffModel->all(),
            'office_managers' => $this->StaffModel->get_office_managers(),
        );
        $this->load->view('accountant/transact_to_staff', $data);
    }

    public function salary_to_staff()
    {
        $data = array(
            'staff' => $this->StaffModel->all(),
            'office_managers' => $this->StaffModel->get_office_managers(),
        );
        $this->load->view('accountant/salary_to_staff', $data);
    }

	public function packing_list_section()
	{
		$this->load->view('accountant/packing_list_section');
	}

    public function accounting()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->AccountingModel->get_total_amount_recorded(1, $current_year),
            'feb_total_amount' => $this->AccountingModel->get_total_amount_recorded(2, $current_year),
            'mar_total_amount' => $this->AccountingModel->get_total_amount_recorded(3, $current_year),
            'apr_total_amount' => $this->AccountingModel->get_total_amount_recorded(4, $current_year),
            'may_total_amount' => $this->AccountingModel->get_total_amount_recorded(5, $current_year),
            'jun_total_amount' => $this->AccountingModel->get_total_amount_recorded(6, $current_year),
            'jul_total_amount' => $this->AccountingModel->get_total_amount_recorded(7, $current_year),
            'aug_total_amount' => $this->AccountingModel->get_total_amount_recorded(8, $current_year),
            'sep_total_amount' => $this->AccountingModel->get_total_amount_recorded(9, $current_year),
            'oct_total_amount' => $this->AccountingModel->get_total_amount_recorded(10, $current_year),
            'nov_total_amount' => $this->AccountingModel->get_total_amount_recorded(11, $current_year),
            'dec_total_amount' => $this->AccountingModel->get_total_amount_recorded(12, $current_year),
            'account' => $this->AccountingModel->all(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('accountant/accounting', $data);
    }

    public function transport_activity()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->TransportModel->get_total_expenses(1, $current_year),
            'feb_total_amount' => $this->TransportModel->get_total_expenses(2, $current_year),
            'mar_total_amount' => $this->TransportModel->get_total_expenses(3, $current_year),
            'apr_total_amount' => $this->TransportModel->get_total_expenses(4, $current_year),
            'may_total_amount' => $this->TransportModel->get_total_expenses(5, $current_year),
            'jun_total_amount' => $this->TransportModel->get_total_expenses(6, $current_year),
            'jul_total_amount' => $this->TransportModel->get_total_expenses(7, $current_year),
            'aug_total_amount' => $this->TransportModel->get_total_expenses(8, $current_year),
            'sep_total_amount' => $this->TransportModel->get_total_expenses(9, $current_year),
            'oct_total_amount' => $this->TransportModel->get_total_expenses(10, $current_year),
            'nov_total_amount' => $this->TransportModel->get_total_expenses(11, $current_year),
            'dec_total_amount' => $this->TransportModel->get_total_expenses(12, $current_year),
            'activity' => $this->TransportModel->all(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('accountant/transport_activity', $data);
    }

    public function logs()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->LogModel->get_total_amount(1, $current_year),
            'feb_total_amount' => $this->LogModel->get_total_amount(2, $current_year),
            'mar_total_amount' => $this->LogModel->get_total_amount(3, $current_year),
            'apr_total_amount' => $this->LogModel->get_total_amount(4, $current_year),
            'may_total_amount' => $this->LogModel->get_total_amount(5, $current_year),
            'jun_total_amount' => $this->LogModel->get_total_amount(6, $current_year),
            'jul_total_amount' => $this->LogModel->get_total_amount(7, $current_year),
            'aug_total_amount' => $this->LogModel->get_total_amount(8, $current_year),
            'sep_total_amount' => $this->LogModel->get_total_amount(9, $current_year),
            'oct_total_amount' => $this->LogModel->get_total_amount(10, $current_year),
            'nov_total_amount' => $this->LogModel->get_total_amount(11, $current_year),
            'dec_total_amount' => $this->LogModel->get_total_amount(12, $current_year),

            'jan_amount_straight' => $this->LogModel->get_amount_straight(1, $current_year),
            'feb_amount_straight' => $this->LogModel->get_amount_straight(2, $current_year),
            'mar_amount_straight' => $this->LogModel->get_amount_straight(3, $current_year),
            'apr_amount_straight' => $this->LogModel->get_amount_straight(4, $current_year),
            'may_amount_straight' => $this->LogModel->get_amount_straight(5, $current_year),
            'jun_amount_straight' => $this->LogModel->get_amount_straight(6, $current_year),
            'jul_amount_straight' => $this->LogModel->get_amount_straight(7, $current_year),
            'aug_amount_straight' => $this->LogModel->get_amount_straight(8, $current_year),
            'sep_amount_straight' => $this->LogModel->get_amount_straight(9, $current_year),
            'oct_amount_straight' => $this->LogModel->get_amount_straight(10, $current_year),
            'nov_amount_straight' => $this->LogModel->get_amount_straight(11, $current_year),
            'dec_amount_straight' => $this->LogModel->get_amount_straight(12, $current_year),

            'jan_amount_bend' => $this->LogModel->get_total_bend(1, $current_year),
            'feb_amount_bend' => $this->LogModel->get_total_bend(2, $current_year),
            'mar_amount_bend' => $this->LogModel->get_total_bend(3, $current_year),
            'apr_amount_bend' => $this->LogModel->get_total_bend(4, $current_year),
            'may_amount_bend' => $this->LogModel->get_total_bend(5, $current_year),
            'jun_amount_bend' => $this->LogModel->get_total_bend(6, $current_year),
            'jul_amount_bend' => $this->LogModel->get_total_bend(7, $current_year),
            'aug_amount_bend' => $this->LogModel->get_total_bend(8, $current_year),
            'sep_amount_bend' => $this->LogModel->get_total_bend(9, $current_year),
            'oct_amount_bend' => $this->LogModel->get_total_bend(10, $current_year),
            'nov_amount_bend' => $this->LogModel->get_total_bend(11, $current_year),
            'dec_amount_bend' => $this->LogModel->get_total_bend(12, $current_year),

            'jan_amount_feet' => $this->LogModel->get_amount_feet(1, $current_year),
            'feb_amount_feet' => $this->LogModel->get_amount_feet(2, $current_year),
            'mar_amount_feet' => $this->LogModel->get_amount_feet(3, $current_year),
            'apr_amount_feet' => $this->LogModel->get_amount_feet(4, $current_year),
            'may_amount_feet' => $this->LogModel->get_amount_feet(5, $current_year),
            'jun_amount_feet' => $this->LogModel->get_amount_feet(6, $current_year),
            'jul_amount_feet' => $this->LogModel->get_amount_feet(7, $current_year),
            'aug_amount_feet' => $this->LogModel->get_amount_feet(8, $current_year),
            'sep_amount_feet' => $this->LogModel->get_amount_feet(9, $current_year),
            'oct_amount_feet' => $this->LogModel->get_amount_feet(10, $current_year),
            'nov_amount_feet' => $this->LogModel->get_amount_feet(11, $current_year),
            'dec_amount_feet' => $this->LogModel->get_amount_feet(12, $current_year),

            'suppliers' => $this->SupplierModel->all(),
            'log_info' => $this->LogModel->all(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $data['amount_straight_in_year'] = $data['jan_amount_straight'] + $data['feb_amount_straight'] + $data['mar_amount_straight'] +
            $data['apr_amount_straight'] + $data['may_amount_straight'] + $data['jun_amount_straight'] +
            $data['jul_amount_straight'] + $data['aug_amount_straight'] + $data['sep_amount_straight'] +
            $data['oct_amount_straight'] + $data['nov_amount_straight'] + $data['dec_amount_straight'];

        $data['amount_bend_in_year'] = $data['jan_amount_bend'] + $data['feb_amount_bend'] + $data['mar_amount_bend'] +
            $data['apr_amount_bend'] + $data['may_amount_bend'] + $data['jun_amount_bend'] +
            $data['jul_amount_bend'] + $data['aug_amount_bend'] + $data['sep_amount_bend'] +
            $data['oct_amount_bend'] + $data['nov_amount_bend'] + $data['dec_amount_bend'];

        $data['amount_feet_in_year'] = $data['jan_amount_feet'] + $data['feb_amount_feet'] + $data['mar_amount_feet'] +
            $data['apr_amount_feet'] + $data['may_amount_feet'] + $data['jun_amount_feet'] +
            $data['jul_amount_feet'] + $data['aug_amount_feet'] + $data['sep_amount_feet'] +
            $data['oct_amount_feet'] + $data['nov_amount_feet'] + $data['dec_amount_feet'];

        $this->load->view('accountant/logs', $data);
    }
    
    public function logs_item($log_info_id)
    {
        $data = array(
            'log_info' => $this->LogModel->find_row(array('log_info_id' => $log_info_id)),
            'log_straight_info' => $this->LogModel->find_logs_item('log_straight', $log_info_id),
            'log_bend_info' => $this->LogModel->find_logs_item('log_bend', $log_info_id),
            'log_feet_info' => $this->LogModel->find_logs_item('log_feet', $log_info_id),
        );

        $this->load->view('accountant/logs_item', $data);
    }

    public function packing()
    {
        $current_year = date("Y");
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'jan_total_pieces' => $this->PackageModel->get_total_pieces(1, $current_year),
            'feb_total_pieces' => $this->PackageModel->get_total_pieces(2, $current_year),
            'mar_total_pieces' => $this->PackageModel->get_total_pieces(3, $current_year),
            'apr_total_pieces' => $this->PackageModel->get_total_pieces(4, $current_year),
            'may_total_pieces' => $this->PackageModel->get_total_pieces(5, $current_year),
            'jun_total_pieces' => $this->PackageModel->get_total_pieces(6, $current_year),
            'jul_total_pieces' => $this->PackageModel->get_total_pieces(7, $current_year),
            'aug_total_pieces' => $this->PackageModel->get_total_pieces(8, $current_year),
            'sep_total_pieces' => $this->PackageModel->get_total_pieces(9, $current_year),
            'oct_total_pieces' => $this->PackageModel->get_total_pieces(10, $current_year),
            'nov_total_pieces' => $this->PackageModel->get_total_pieces(11, $current_year),
            'dec_total_pieces' => $this->PackageModel->get_total_pieces(12, $current_year),

            'jan_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 1, $current_year),
            'feb_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 2, $current_year),
            'mar_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 3, $current_year),
            'apr_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 4, $current_year),
            'may_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 5, $current_year),
            'jun_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 6, $current_year),
            'jul_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 7, $current_year),
            'aug_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 8, $current_year),
            'sep_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 9, $current_year),
            'oct_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 10, $current_year),
            'nov_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 11, $current_year),
            'dec_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 12, $current_year),
            'packages' => $this->PackageModel->find($staff_id),
            'foremen' => $this->StaffModel->get_foremen(),
        );

        $data['total_pieces_in_year'] = $data['jan_total_pieces'] + $data['feb_total_pieces'] + 
            $data['mar_total_pieces'] +
            $data['apr_total_pieces'] + $data['may_total_pieces'] + $data['jun_total_pieces'] +
            $data['jul_total_pieces'] + $data['aug_total_pieces'] + $data['sep_total_pieces'] +
            $data['oct_total_pieces'] + $data['nov_total_pieces'] + $data['dec_total_pieces'];

        $data['total_cbm_in_year'] = $data['jan_total_cbm'] + $data['feb_total_cbm'] + $data['mar_total_cbm'] +
            $data['apr_total_cbm'] + $data['may_total_cbm'] + $data['jun_total_cbm'] +
            $data['jul_total_cbm'] + $data['aug_total_cbm'] + $data['sep_total_cbm'] +
            $data['oct_total_cbm'] + $data['nov_total_cbm'] + $data['dec_total_cbm'];

        $this->load->view('accountant/packing', $data);
    }

    public function packing_item($package_id)
    {
        $data = array(
            'package_items' => $this->PackageModel->find_package_item($package_id),
            'total_pieces' => $this->PackageModel->get_total_pieces_per_package($package_id),
            'total_cbm' => $this->PackageModel->get_total_cbm_per_package($package_id)
        );

        $this->load->view('accountant/packing_item', $data);
    }

    public function package2_item($package_id)
    {
        $current_year = date("Y");

        // store package id in session

		$data = array(
            'total_pieces' => $this->Package2Model->get_total_pieces_per_package($package_id),
            'total_price' => $this->Package2Model->get_total_price_per_package($package_id),
            'total_cbm' => $this->Package2Model->get_total_cbm_per_package($package_id),
            'total_cft' => $this->Package2Model->get_total_cft_per_package($package_id),
			'packages' => $this->Package2Model->find_package_item($package_id),
		);

        $this->session->set_userdata(array('package_id' => $package_id));
		$this->load->view('accountant/package2_item', $data);
    }


	public function package2()
	{
		$current_year = date("Y");
		$staff_id = $this->session->userdata('staff_id');

		$data = array(
			'jan_total_pieces' => $this->PackageModel->get_total_pieces(1, $current_year),
			'feb_total_pieces' => $this->PackageModel->get_total_pieces(2, $current_year),
			'mar_total_pieces' => $this->PackageModel->get_total_pieces(3, $current_year),
			'apr_total_pieces' => $this->PackageModel->get_total_pieces(4, $current_year),
			'may_total_pieces' => $this->PackageModel->get_total_pieces(5, $current_year),
			'jun_total_pieces' => $this->PackageModel->get_total_pieces(6, $current_year),
			'jul_total_pieces' => $this->PackageModel->get_total_pieces(7, $current_year),
			'aug_total_pieces' => $this->PackageModel->get_total_pieces(8, $current_year),
			'sep_total_pieces' => $this->PackageModel->get_total_pieces(9, $current_year),
			'oct_total_pieces' => $this->PackageModel->get_total_pieces(10, $current_year),
			'nov_total_pieces' => $this->PackageModel->get_total_pieces(11, $current_year),
			'dec_total_pieces' => $this->PackageModel->get_total_pieces(12, $current_year),

			'jan_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 1, $current_year),
			'feb_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 2, $current_year),
			'mar_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 3, $current_year),
			'apr_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 4, $current_year),
			'may_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 5, $current_year),
			'jun_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 6, $current_year),
			'jul_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 7, $current_year),
			'aug_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 8, $current_year),
			'sep_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 9, $current_year),
			'oct_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 10, $current_year),
			'nov_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 11, $current_year),
			'dec_total_cbm' => $this->PackageModel->get_total_cbm_for_one($staff_id, 12, $current_year),
			'packages' => $this->Package2Model->find($staff_id),
		);

		$data['total_pieces_in_year'] = $data['jan_total_pieces'] + $data['feb_total_pieces'] +
			$data['mar_total_pieces'] +
			$data['apr_total_pieces'] + $data['may_total_pieces'] + $data['jun_total_pieces'] +
			$data['jul_total_pieces'] + $data['aug_total_pieces'] + $data['sep_total_pieces'] +
			$data['oct_total_pieces'] + $data['nov_total_pieces'] + $data['dec_total_pieces'];

		$data['total_cbm_in_year'] = $data['jan_total_cbm'] + $data['feb_total_cbm'] + $data['mar_total_cbm'] +
			$data['apr_total_cbm'] + $data['may_total_cbm'] + $data['jun_total_cbm'] +
			$data['jul_total_cbm'] + $data['aug_total_cbm'] + $data['sep_total_cbm'] +
			$data['oct_total_cbm'] + $data['nov_total_cbm'] + $data['dec_total_cbm'];

		$this->load->view('accountant/package2', $data);
	}

    
    public function forestry_activity()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->ForestryModel->get_total_amount_recieved(1, $current_year),
            'feb_total_amount' => $this->ForestryModel->get_total_amount_recieved(2, $current_year),
            'mar_total_amount' => $this->ForestryModel->get_total_amount_recieved(3, $current_year),
            'apr_total_amount' => $this->ForestryModel->get_total_amount_recieved(4, $current_year),
            'may_total_amount' => $this->ForestryModel->get_total_amount_recieved(5, $current_year),
            'jun_total_amount' => $this->ForestryModel->get_total_amount_recieved(6, $current_year),
            'jul_total_amount' => $this->ForestryModel->get_total_amount_recieved(7, $current_year),
            'aug_total_amount' => $this->ForestryModel->get_total_amount_recieved(8, $current_year),
            'sep_total_amount' => $this->ForestryModel->get_total_amount_recieved(9, $current_year),
            'oct_total_amount' => $this->ForestryModel->get_total_amount_recieved(10, $current_year),
            'nov_total_amount' => $this->ForestryModel->get_total_amount_recieved(11, $current_year),
            'dec_total_amount' => $this->ForestryModel->get_total_amount_recieved(12, $current_year),
            'activity' => $this->ForestryModel->all(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('accountant/forestry_activity', $data);
    }

    public function consumers_activity()
    {
        $staff_id = $this->session->userdata('staff_id');
        $current_year = date("Y");

        $data = array(
            'consumers' => $this->ConsumerModel->all(),
            'consumers_activity' => $this->ConsumerActivityModel->find($staff_id),

            'jan_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 1, $current_year),
            'feb_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 2, $current_year),
            'mar_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 3, $current_year),
            'apr_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 4, $current_year),
            'may_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 5, $current_year),
            'jun_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 6, $current_year),
            'jul_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 7, $current_year),
            'aug_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 8, $current_year),
            'sep_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 9, $current_year),
            'oct_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 10, $current_year),
            'nov_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 11, $current_year),
            'dec_total_amount' => $this->ConsumerActivityModel->get_total_amount_for_one($staff_id, 12, $current_year),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
        $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
        $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
        $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('accountant/consumers_activity', $data);
    }


    public function member($user_id)
    {
        $data = array(
            'user' => $this->MemberModel->all_user($user_id),
            'invoices' => $this->InvoiceModel->find($user_id),
        );
        $this->load->view('admin/member', $data);
    }

    public function profile()
    {
        $data = array(
            'regions' => $this->RegionModel->find($admin_id),
        );
        $this->load->view('admin/profile');
    }

    public function links()
    {
        $user_id = $this->session->userdata('user_id');
        $data = array(
            'links' => $this->LinkModel->find($user_id),
        );
        $this->load->view('user/links', $data);
    }

    public function store()
    {
        $status = array();

        $email = strip_tags($this->input->post('email'));
        $password = strip_tags($this->input->post('password'));
        $confirm_password = strip_tags($this->input->post('confirm_password'));

        if ($password != $confirm_password) {
            $status['err_password_mismatch'] = true;
            $this->session->set_userdata($status);
            redirect('user/signup');
        } else {

            $data = array(
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            );

            if ($this->UserModel->store($data)) {
                $status['success_register'] = true;
                $this->session->set_userdata($status);
                redirect('user/login');
            } else {
                $status['failure_register'] = true;
                $this->session->set_userdata($status);
                redirect('user/signup');
            }
        }
    }

    public function find()
    {
        $status = array();

        $username = strip_tags($this->input->post('username'));
        $password = strip_tags($this->input->post('password'));

        $data = array(
            'username' => $username,
            'password' => $password,
        );

        $res = $this->AdminModel->find_row($data);

        if ($res) {
            $status['admin_id'] = $res->admin_id;
            $status['username'] = $res->username;
            $status['success_login'] = true;
            $this->session->set_userdata($status);
            redirect('admin/');
        } else {
            $status['failure_login'] = true;
            $this->session->set_userdata($status);
            redirect('admin/login');
        }
    }

    public function update()
    {
        $status = array();

        $current_password = $this->input->post('current_password');
        $new_password = $this->input->post('new_password');
        $confirm_new_password = $this->input->post('confirm_new_password');

        $data = array(
            'user_id' => $this->session->userdata('user_id'),
        );

        if ($new_password != $confirm_new_password) {
            $status['err_password_mismatch'] = true;
        } else if (password_verify($current_password,
            $this->UserModel->find_row($data)->password)) {

            $user_id = $this->session->userdata('user_id');
            $filters = array(
                'user_id' => $user_id,
            );

            if ($this->UserModel->update($filters, password_hash($new_password, PASSWORD_DEFAULT))) {
                $status['success_password_update'] = true;
            } else {
                $status['failure_password_update'] = true;
            }
        } else {
            $status['err_wrong_current_password'] = true;
        }

        $this->session->set_userdata($status);
        redirect('user/profile');
    }

    public function upload_photo()
    {
        $status = array();
        $file_name = $this->do_upload('file');

        if ($file_name) {
            $data = array(
                'image' => 'uploads/user/' . $file_name,
            );
            $user_id = $this->session->userdata('user_id');
            $this->UserModel->update_image($user_id, $data);

            $status['image'] = $data['image'];
        }

        $this->session->set_userdata($status);
        redirect('user/profile');
    }

    public function do_upload($file)
    {
        $config['upload_path'] = 'uploads/user/';
        $config['file_name'] = date("Ymdhis");
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($file)) {
            $status['success_upload_file'] = true;
            $this->session->set_userdata($status);
            return $this->upload->data('file_name');
        } else {
            $status['failure_upload_file'] = $this->upload->display_errors();
            $this->session->set_userdata($status);
            return false;
        }
    }

}
