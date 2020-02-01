<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OfficeAdmin extends CI_Controller
{
    public function index()
    {
        $this->load->view('office/admin/index');
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
            'sawmills' => $this->SawmillModel->all(),
        );
        $this->load->view('office/admin/staff', $data);
    }

    public function foreman_staff()
    {
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'staff' => $this->ForemanStaffModel->all(),
        );
        $this->load->view('office/admin/foreman_staff', $data);
    }

    public function comment($foreman_staff_id)
    {
        $data = array(
            'user' => $this->ForemanStaffModel->find_row(array('foreman_staff_id' => $foreman_staff_id)),
            'foreman_staff_id' => $foreman_staff_id,
            'comments' => $this->CommentModel->find($foreman_staff_id),
        );
        $this->load->view('office/admin/comment', $data);
    }

    public function suppliers()
    {
        $data = array(
            'suppliers' => $this->SupplierModel->all(),
        );
        $this->load->view('office/admin/suppliers', $data);
    }

    public function sawmills()
    {
        $data = array(
            'sawmills' => $this->SawmillModel->all(),
        );
        $this->load->view('office/admin/sawmills', $data);
    }

    public function log_prices($sawmill_id)
    {
        $data = array(
            'prices_straight' => $this->SawmillModel->find_saw_mill_price_row(
                array('sawmill_id' => $sawmill_id, 'type' => 'straight')
            ),
            'prices_bend' => $this->SawmillModel->find_saw_mill_price_row(
                array('sawmill_id' => $sawmill_id, 'type' => 'bend')
            ),
            'prices_feet' => $this->SawmillModel->find_saw_mill_price_row(
                array('sawmill_id' => $sawmill_id, 'type' => 'feet')
            ),
        );
        $this->load->view('office/admin/log_prices', $data);
    }

    public function consumers()
    {
        $this->load->view('office/admin/consumers');
    }

    public function consumers_profile()
    {
        $data = array(
            'consumers' => $this->ConsumerModel->all(),
        );
        $this->load->view('office/admin/consumers_profile', $data);
    }

    public function packing_list_section()
    {
        $this->load->view('office/admin/packing_list_section');
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
        $this->load->view('office/admin/package2_item', $data);
    }

    public function package2()
    {
        $current_year = date("Y");
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'jan_total_pieces' => $this->Package2Model->get_total_pieces(1, $current_year),
            'feb_total_pieces' => $this->Package2Model->get_total_pieces(2, $current_year),
            'mar_total_pieces' => $this->Package2Model->get_total_pieces(3, $current_year),
            'apr_total_pieces' => $this->Package2Model->get_total_pieces(4, $current_year),
            'may_total_pieces' => $this->Package2Model->get_total_pieces(5, $current_year),
            'jun_total_pieces' => $this->Package2Model->get_total_pieces(6, $current_year),
            'jul_total_pieces' => $this->Package2Model->get_total_pieces(7, $current_year),
            'aug_total_pieces' => $this->Package2Model->get_total_pieces(8, $current_year),
            'sep_total_pieces' => $this->Package2Model->get_total_pieces(9, $current_year),
            'oct_total_pieces' => $this->Package2Model->get_total_pieces(10, $current_year),
            'nov_total_pieces' => $this->Package2Model->get_total_pieces(11, $current_year),
            'dec_total_pieces' => $this->Package2Model->get_total_pieces(12, $current_year),

            'jan_total_price' => $this->Package2Model->get_total_price(1, $current_year),
            'feb_total_price' => $this->Package2Model->get_total_price(2, $current_year),
            'mar_total_price' => $this->Package2Model->get_total_price(3, $current_year),
            'apr_total_price' => $this->Package2Model->get_total_price(4, $current_year),
            'may_total_price' => $this->Package2Model->get_total_price(5, $current_year),
            'jun_total_price' => $this->Package2Model->get_total_price(6, $current_year),
            'jul_total_price' => $this->Package2Model->get_total_price(7, $current_year),
            'aug_total_price' => $this->Package2Model->get_total_price(8, $current_year),
            'sep_total_price' => $this->Package2Model->get_total_price(9, $current_year),
            'oct_total_price' => $this->Package2Model->get_total_price(10, $current_year),
            'nov_total_price' => $this->Package2Model->get_total_price(11, $current_year),
            'dec_total_price' => $this->Package2Model->get_total_price(12, $current_year),
            'packages' => $this->Package2Model->find($staff_id),
        );

        $data['total_pieces_in_year'] = $data['jan_total_pieces'] + $data['feb_total_pieces'] +
            $data['mar_total_pieces'] +
            $data['apr_total_pieces'] + $data['may_total_pieces'] + $data['jun_total_pieces'] +
            $data['jul_total_pieces'] + $data['aug_total_pieces'] + $data['sep_total_pieces'] +
            $data['oct_total_pieces'] + $data['nov_total_pieces'] + $data['dec_total_pieces'];

        $data['total_price_in_year'] = $data['jan_total_price'] + $data['feb_total_price'] + $data['mar_total_price'] +
            $data['apr_total_price'] + $data['may_total_price'] + $data['jun_total_price'] +
            $data['jul_total_price'] + $data['aug_total_price'] + $data['sep_total_price'] +
            $data['oct_total_price'] + $data['nov_total_price'] + $data['dec_total_price'];

        $this->load->view('office/admin/package2', $data);
    }

    public function consumers_activity()
    {
        $current_year = date("Y");

        $data = array(
            'consumers' => $this->ConsumerModel->all(),
            'consumers_activity' => $this->ConsumerActivityModel->all(),

            'jan_total_amount' => $this->ConsumerActivityModel->get_total_amount(1, $current_year),
            'feb_total_amount' => $this->ConsumerActivityModel->get_total_amount(2, $current_year),
            'mar_total_amount' => $this->ConsumerActivityModel->get_total_amount(3, $current_year),
            'apr_total_amount' => $this->ConsumerActivityModel->get_total_amount(4, $current_year),
            'may_total_amount' => $this->ConsumerActivityModel->get_total_amount(5, $current_year),
            'jun_total_amount' => $this->ConsumerActivityModel->get_total_amount(6, $current_year),
            'jul_total_amount' => $this->ConsumerActivityModel->get_total_amount(7, $current_year),
            'aug_total_amount' => $this->ConsumerActivityModel->get_total_amount(8, $current_year),
            'sep_total_amount' => $this->ConsumerActivityModel->get_total_amount(9, $current_year),
            'oct_total_amount' => $this->ConsumerActivityModel->get_total_amount(10, $current_year),
            'nov_total_amount' => $this->ConsumerActivityModel->get_total_amount(11, $current_year),
            'dec_total_amount' => $this->ConsumerActivityModel->get_total_amount(12, $current_year),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('office/admin/consumers_activity', $data);
    }

    public function stock()
    {
        $data = array(
            'stock' => $this->StockModel->all(),
            'suppliers' => $this->SupplierModel->all(),
        );
        $this->load->view('office/admin/stock', $data);
    }

    public function loading()
    {
        $data = array(
            'loadings' => $this->LoadingModel->all(),
        );
        $this->load->view('office/admin/loadings', $data);
    }

    public function accounts_section()
    {
        $this->load->view('office/admin/accounts_section');
    }

    public function other_expenses()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->OtherExpensesModel->get_amount_recorded(1, $current_year),
            'feb_total_amount' => $this->OtherExpensesModel->get_amount_recorded(2, $current_year),
            'mar_total_amount' => $this->OtherExpensesModel->get_amount_recorded(3, $current_year),
            'apr_total_amount' => $this->OtherExpensesModel->get_amount_recorded(4, $current_year),
            'may_total_amount' => $this->OtherExpensesModel->get_amount_recorded(5, $current_year),
            'jun_total_amount' => $this->OtherExpensesModel->get_amount_recorded(6, $current_year),
            'jul_total_amount' => $this->OtherExpensesModel->get_amount_recorded(7, $current_year),
            'aug_total_amount' => $this->OtherExpensesModel->get_amount_recorded(8, $current_year),
            'sep_total_amount' => $this->OtherExpensesModel->get_amount_recorded(9, $current_year),
            'oct_total_amount' => $this->OtherExpensesModel->get_amount_recorded(10, $current_year),
            'nov_total_amount' => $this->OtherExpensesModel->get_amount_recorded(11, $current_year),
            'dec_total_amount' => $this->OtherExpensesModel->get_amount_recorded(12, $current_year),
            'expenses' => $this->OtherExpensesModel->all(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('office/admin/other_expenses', $data);
    }

    public function home_expenses()
    {
        $current_year = date("Y");

        $data = array(
            'jan_total_amount' => $this->HomeExpensesModel->get_amount_recorded(1, $current_year),
            'feb_total_amount' => $this->HomeExpensesModel->get_amount_recorded(2, $current_year),
            'mar_total_amount' => $this->HomeExpensesModel->get_amount_recorded(3, $current_year),
            'apr_total_amount' => $this->HomeExpensesModel->get_amount_recorded(4, $current_year),
            'may_total_amount' => $this->HomeExpensesModel->get_amount_recorded(5, $current_year),
            'jun_total_amount' => $this->HomeExpensesModel->get_amount_recorded(6, $current_year),
            'jul_total_amount' => $this->HomeExpensesModel->get_amount_recorded(7, $current_year),
            'aug_total_amount' => $this->HomeExpensesModel->get_amount_recorded(8, $current_year),
            'sep_total_amount' => $this->HomeExpensesModel->get_amount_recorded(9, $current_year),
            'oct_total_amount' => $this->HomeExpensesModel->get_amount_recorded(10, $current_year),
            'nov_total_amount' => $this->HomeExpensesModel->get_amount_recorded(11, $current_year),
            'dec_total_amount' => $this->HomeExpensesModel->get_amount_recorded(12, $current_year),
            'expenses' => $this->HomeExpensesModel->all(),
        );

        $data['total_amount_in_year'] = $data['jan_total_amount'] + $data['feb_total_amount'] + $data['mar_total_amount'] +
            $data['apr_total_amount'] + $data['may_total_amount'] + $data['jun_total_amount'] +
            $data['jul_total_amount'] + $data['aug_total_amount'] + $data['sep_total_amount'] +
            $data['oct_total_amount'] + $data['nov_total_amount'] + $data['dec_total_amount'];

        $this->load->view('office/admin/home_expenses', $data);
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

        $this->load->view('office/admin/staff_transactions', $data);
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
        $this->load->view('office/admin/staff_accounts', $data);
    }

    public function transact_to_staff()
    {
        $data = array(
            'staff' => $this->StaffModel->all(),
        );
        $this->load->view('office/admin/transact_to_staff', $data);
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

        $this->load->view('office/admin/salary', $data);
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

        $this->load->view('office/admin/accounting', $data);
    }

    public function transport_activity()
    {
        $current_year = date("Y");
        $staff_id = $this->session->userdata('staff_id');

        $data = array(
            'jan_total_expenses' => $this->TransportModel->get_total_expenses(1, $current_year),
            'feb_total_expenses' => $this->TransportModel->get_total_expenses(2, $current_year),
            'mar_total_expenses' => $this->TransportModel->get_total_expenses(3, $current_year),
            'apr_total_expenses' => $this->TransportModel->get_total_expenses(4, $current_year),
            'may_total_expenses' => $this->TransportModel->get_total_expenses(5, $current_year),
            'jun_total_expenses' => $this->TransportModel->get_total_expenses(6, $current_year),
            'jul_total_expenses' => $this->TransportModel->get_total_expenses(7, $current_year),
            'aug_total_expenses' => $this->TransportModel->get_total_expenses(8, $current_year),
            'sep_total_expenses' => $this->TransportModel->get_total_expenses(9, $current_year),
            'oct_total_expenses' => $this->TransportModel->get_total_expenses(10, $current_year),
            'nov_total_expenses' => $this->TransportModel->get_total_expenses(11, $current_year),
            'dec_total_expenses' => $this->TransportModel->get_total_expenses(12, $current_year),

            'activity' => $this->TransportModel->all(),
        );

        $data['total_expenses_in_year'] = $data['jan_total_expenses'] + $data['feb_total_expenses'] +
            $data['mar_total_expenses'] +
            $data['apr_total_expenses'] + $data['may_total_expenses'] + $data['jun_total_expenses'] +
            $data['jul_total_expenses'] + $data['aug_total_expenses'] + $data['sep_total_expenses'] +
            $data['oct_total_expenses'] + $data['nov_total_expenses'] + $data['dec_total_expenses'];

        $this->load->view('office/admin/transport_activity', $data);
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

            'jan_total_logs' => $this->LogModel->get_total_logs(1, $current_year),
            'feb_total_logs' => $this->LogModel->get_total_logs(2, $current_year),
            'mar_total_logs' => $this->LogModel->get_total_logs(3, $current_year),
            'apr_total_logs' => $this->LogModel->get_total_logs(4, $current_year),
            'may_total_logs' => $this->LogModel->get_total_logs(5, $current_year),
            'jun_total_logs' => $this->LogModel->get_total_logs(6, $current_year),
            'jul_total_logs' => $this->LogModel->get_total_logs(7, $current_year),
            'aug_total_logs' => $this->LogModel->get_total_logs(8, $current_year),
            'sep_total_logs' => $this->LogModel->get_total_logs(9, $current_year),
            'oct_total_logs' => $this->LogModel->get_total_logs(10, $current_year),
            'nov_total_logs' => $this->LogModel->get_total_logs(11, $current_year),
            'dec_total_logs' => $this->LogModel->get_total_logs(12, $current_year),

            'jan_total_logs_straight' => $this->LogModel->get_total_logs_straight(1, $current_year),
            'feb_total_logs_straight' => $this->LogModel->get_total_logs_straight(2, $current_year),
            'mar_total_logs_straight' => $this->LogModel->get_total_logs_straight(3, $current_year),
            'apr_total_logs_straight' => $this->LogModel->get_total_logs_straight(4, $current_year),
            'may_total_logs_straight' => $this->LogModel->get_total_logs_straight(5, $current_year),
            'jun_total_logs_straight' => $this->LogModel->get_total_logs_straight(6, $current_year),
            'jul_total_logs_straight' => $this->LogModel->get_total_logs_straight(7, $current_year),
            'aug_total_logs_straight' => $this->LogModel->get_total_logs_straight(8, $current_year),
            'sep_total_logs_straight' => $this->LogModel->get_total_logs_straight(9, $current_year),
            'oct_total_logs_straight' => $this->LogModel->get_total_logs_straight(10, $current_year),
            'nov_total_logs_straight' => $this->LogModel->get_total_logs_straight(11, $current_year),
            'dec_total_logs_straight' => $this->LogModel->get_total_logs_straight(12, $current_year),

            'jan_total_logs_bend' => $this->LogModel->get_total_logs_bend(1, $current_year),
            'feb_total_logs_bend' => $this->LogModel->get_total_logs_bend(2, $current_year),
            'mar_total_logs_bend' => $this->LogModel->get_total_logs_bend(3, $current_year),
            'apr_total_logs_bend' => $this->LogModel->get_total_logs_bend(4, $current_year),
            'may_total_logs_bend' => $this->LogModel->get_total_logs_bend(5, $current_year),
            'jun_total_logs_bend' => $this->LogModel->get_total_logs_bend(6, $current_year),
            'jul_total_logs_bend' => $this->LogModel->get_total_logs_bend(7, $current_year),
            'aug_total_logs_bend' => $this->LogModel->get_total_logs_bend(8, $current_year),
            'sep_total_logs_bend' => $this->LogModel->get_total_logs_bend(9, $current_year),
            'oct_total_logs_bend' => $this->LogModel->get_total_logs_bend(10, $current_year),
            'nov_total_logs_bend' => $this->LogModel->get_total_logs_bend(11, $current_year),
            'dec_total_logs_bend' => $this->LogModel->get_total_logs_bend(12, $current_year),

            'jan_total_logs_feet' => $this->LogModel->get_total_logs_feet(1, $current_year),
            'feb_total_logs_feet' => $this->LogModel->get_total_logs_feet(2, $current_year),
            'mar_total_logs_feet' => $this->LogModel->get_total_logs_feet(3, $current_year),
            'apr_total_logs_feet' => $this->LogModel->get_total_logs_feet(4, $current_year),
            'may_total_logs_feet' => $this->LogModel->get_total_logs_feet(5, $current_year),
            'jun_total_logs_feet' => $this->LogModel->get_total_logs_feet(6, $current_year),
            'jul_total_logs_feet' => $this->LogModel->get_total_logs_feet(7, $current_year),
            'aug_total_logs_feet' => $this->LogModel->get_total_logs_feet(8, $current_year),
            'sep_total_logs_feet' => $this->LogModel->get_total_logs_feet(9, $current_year),
            'oct_total_logs_feet' => $this->LogModel->get_total_logs_feet(10, $current_year),
            'nov_total_logs_feet' => $this->LogModel->get_total_logs_feet(11, $current_year),
            'dec_total_logs_feet' => $this->LogModel->get_total_logs_feet(12, $current_year),

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

        $data['total_logs_in_year'] = $data['jan_total_logs'] + $data['feb_total_logs'] + $data['mar_total_logs'] +
            $data['apr_total_logs'] + $data['may_total_logs'] + $data['jun_total_logs'] +
            $data['jul_total_logs'] + $data['aug_total_logs'] + $data['sep_total_logs'] +
            $data['oct_total_logs'] + $data['nov_total_logs'] + $data['dec_total_logs'];

        $data['total_logs_straight_in_year'] = $data['jan_total_logs_straight'] + $data['feb_total_logs_straight'] + $data['mar_total_logs_straight'] +
            $data['apr_total_logs_straight'] + $data['may_total_logs_straight'] + $data['jun_total_logs_straight'] +
            $data['jul_total_logs_straight'] + $data['aug_total_logs_straight'] + $data['sep_total_logs_straight'] +
            $data['oct_total_logs_straight'] + $data['nov_total_logs_straight'] + $data['dec_total_logs_straight'];

        $data['total_logs_bend_in_year'] = $data['jan_total_logs_bend'] + $data['feb_total_logs_bend'] + $data['mar_total_logs_bend'] +
            $data['apr_total_logs_bend'] + $data['may_total_logs_bend'] + $data['jun_total_logs_bend'] +
            $data['jul_total_logs_bend'] + $data['aug_total_logs_bend'] + $data['sep_total_logs_bend'] +
            $data['oct_total_logs_bend'] + $data['nov_total_logs_bend'] + $data['dec_total_logs_bend'];

        $data['total_logs_feet_in_year'] = $data['jan_total_logs_feet'] + $data['feb_total_logs_feet'] + $data['mar_total_logs_feet'] +
            $data['apr_total_logs_feet'] + $data['may_total_logs_feet'] + $data['jun_total_logs_feet'] +
            $data['jul_total_logs_feet'] + $data['aug_total_logs_feet'] + $data['sep_total_logs_feet'] +
            $data['oct_total_logs_feet'] + $data['nov_total_logs_feet'] + $data['dec_total_logs_feet'];

        $this->load->view('office/admin/logs', $data);
    }

    public function logs_item($log_info_id)
    {
        $data = array(
            'log_info' => $this->LogModel->find_row(array('log_info_id' => $log_info_id)),
            'log_straight_info' => $this->LogModel->find_logs_item('log_straight', $log_info_id),
            'log_bend_info' => $this->LogModel->find_logs_item('log_bend', $log_info_id),
            'log_feet_info' => $this->LogModel->find_logs_item('log_feet', $log_info_id),
        );

        $this->load->view('office/admin/logs_item', $data);
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

        $this->load->view('office/admin/forestry_activity', $data);
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

            'jan_total_cbm' => $this->PackageModel->get_total_cbm(1, $current_year),
            'feb_total_cbm' => $this->PackageModel->get_total_cbm(2, $current_year),
            'mar_total_cbm' => $this->PackageModel->get_total_cbm(3, $current_year),
            'apr_total_cbm' => $this->PackageModel->get_total_cbm(4, $current_year),
            'may_total_cbm' => $this->PackageModel->get_total_cbm(5, $current_year),
            'jun_total_cbm' => $this->PackageModel->get_total_cbm(6, $current_year),
            'jul_total_cbm' => $this->PackageModel->get_total_cbm(7, $current_year),
            'aug_total_cbm' => $this->PackageModel->get_total_cbm(8, $current_year),
            'sep_total_cbm' => $this->PackageModel->get_total_cbm(9, $current_year),
            'oct_total_cbm' => $this->PackageModel->get_total_cbm(10, $current_year),
            'nov_total_cbm' => $this->PackageModel->get_total_cbm(11, $current_year),
            'dec_total_cbm' => $this->PackageModel->get_total_cbm(12, $current_year),
            'packages' => $this->PackageModel->all(),
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

        $this->load->view('office/admin/packing', $data);
    }

    public function packing_item($package_id)
    {
        $data = array(
            'package_items' => $this->PackageModel->find_package_item($package_id),
            'total_pieces' => $this->PackageModel->get_total_pieces_per_package($package_id),
            'total_cbm' => $this->PackageModel->get_total_cbm_per_package($package_id),
        );

        $this->load->view('office/admin/packing_item', $data);
    }

    public function shipping_activity()
    {
        $current_year = date("Y");

        $data = array(
            'jan_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(1, $current_year),
            'feb_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(2, $current_year),
            'mar_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(3, $current_year),
            'apr_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(4, $current_year),
            'may_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(5, $current_year),
            'jun_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(6, $current_year),
            'jul_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(7, $current_year),
            'aug_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(8, $current_year),
            'sep_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(9, $current_year),
            'oct_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(10, $current_year),
            'nov_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(11, $current_year),
            'dec_shipping_charges' => $this->ShippingModel->get_total_shipping_charges(12, $current_year),

            'jan_num_pieces' => $this->ShippingModel->get_total_num_pieces(1, $current_year),
            'feb_num_pieces' => $this->ShippingModel->get_total_num_pieces(2, $current_year),
            'mar_num_pieces' => $this->ShippingModel->get_total_num_pieces(3, $current_year),
            'apr_num_pieces' => $this->ShippingModel->get_total_num_pieces(4, $current_year),
            'may_num_pieces' => $this->ShippingModel->get_total_num_pieces(5, $current_year),
            'jun_num_pieces' => $this->ShippingModel->get_total_num_pieces(6, $current_year),
            'jul_num_pieces' => $this->ShippingModel->get_total_num_pieces(7, $current_year),
            'aug_num_pieces' => $this->ShippingModel->get_total_num_pieces(8, $current_year),
            'sep_num_pieces' => $this->ShippingModel->get_total_num_pieces(9, $current_year),
            'oct_num_pieces' => $this->ShippingModel->get_total_num_pieces(10, $current_year),
            'nov_num_pieces' => $this->ShippingModel->get_total_num_pieces(11, $current_year),
            'dec_num_pieces' => $this->ShippingModel->get_total_num_pieces(12, $current_year),

            'activity' => $this->ShippingModel->all(),
        );

        $data['shipping_charges_in_year'] = $data['jan_shipping_charges'] + $data['feb_shipping_charges'] +
            $data['mar_shipping_charges'] +
            $data['apr_shipping_charges'] + $data['may_shipping_charges'] + $data['jun_shipping_charges'] +
            $data['jul_shipping_charges'] + $data['aug_shipping_charges'] + $data['sep_shipping_charges'] +
            $data['oct_shipping_charges'] + $data['nov_shipping_charges'] + $data['dec_shipping_charges'];

        $data['num_pieces_in_year'] = $data['jan_num_pieces'] + $data['feb_num_pieces'] + $data['mar_num_pieces'] +
            $data['apr_num_pieces'] + $data['may_num_pieces'] + $data['jun_num_pieces'] +
            $data['jul_num_pieces'] + $data['aug_num_pieces'] + $data['sep_num_pieces'] +
            $data['oct_num_pieces'] + $data['nov_num_pieces'] + $data['dec_num_pieces'];

        $this->load->view('office/admin/shipping_activity', $data);
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

    public function faq()
    {

        $data = array(
            'recieved_funds_total' => $this->ConsumerActivityModel->get_total_funds_recieved(),
            'balance_funds_total' => $this->ConsumerActivityModel->get_total_balance(),

            'total_logs' => $this->LogModel->total_logs(),
            'total_straight' => $this->LogModel->total_straight(),
            'total_bend' => $this->LogModel->total_bend(),
			'total_feet' => $this->LogModel->total_feet(),
			
			'total_transport_expenses' => $this->TransportModel->total_expenses(),

			'total_shipping_expenses' => $this->ShippingModel->total_expenses(),

			'total_home_expenses' => $this->HomeExpensesModel->total_expenses(),

			'total_other_expenses' => $this->OtherExpensesModel->total_expenses(),

			'total_forestry_expenses' => $this->ForestryModel->total_expenses(),

			'total_salary_paid_cedis' => $this->SalaryModel->total_salary_paid_cedis(),

			'total_salary_paid_rupees' => $this->SalaryModel->total_salary_paid_rupees(),

            'total_staff_ghanaian' => $this->StaffModel->total_staff_by_nationality('Ghanaian'),
            'total_staff_indian' => $this->StaffModel->total_staff_by_nationality('Indian'),

			'total_permit' => $this->ForestryModel->total_permit()
		);
		
		$data['total_company_expenses'] = $data['total_transport_expenses'] + 
		$data['total_shipping_expenses'] + $data['total_home_expenses'] + 
		$data['total_other_expenses'] + $data['total_forestry_expenses'];

        $this->load->view('office/admin/faq', $data);
    }

}
