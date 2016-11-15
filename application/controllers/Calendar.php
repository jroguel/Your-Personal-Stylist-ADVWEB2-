<?php

class Calendar extends CI_Controller {

	public function index($page = '/calendar/home')
	{

	$this->load->helper('url');
	$data = array(
	'title' => 'Calendar',
	'year' => $this->uri->segment(4),
	'month' => $this->uri->segment(5)
	);
	// $data['title'] = 'Calendar';
	// // $data['start_day'] = 'monday';
	// // $data['show_next_prev'] = true;
	// // $data['next_prev_url'] = base_url() . "calendar/";
	// $data['year'] = $this->uri->segment(4);
	// $data['month'] = $this->uri->segment(5);
	$prefs['template'] = '
		{table_open}<table cellpadding="1" cellspacing="1">{/table_open}

		{heading_row_start}<tr>{/heading_row_start}

		{heading_previous_cell}<th class="prev_sign"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
		{heading_next_cell}<th class="next_sign"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

		{heading_row_end}</tr>{/heading_row_end}

		//Deciding where to week row start
		{week_row_start}<tr class="week_name" >{/week_row_start}
		//Deciding  week day cell and  week days
		{week_day_cell}<td >{week_day}</td>{/week_day_cell}
		//week row end
		{week_row_end}</tr>{/week_row_end}

		{cal_row_start}<tr>{/cal_row_start}
		{cal_cell_start}<td>{/cal_cell_start}

		{cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
		{cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

		{cal_cell_no_content}{day}{/cal_cell_no_content}
		{cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

		{cal_cell_blank}&nbsp;{/cal_cell_blank}

		{cal_cell_end}</td>{/cal_cell_end}
		{cal_row_end}</tr>{/cal_row_end}

		{table_close}</table>{/table_close}
		';

	$prefs['day_type'] = 'short';
	$prefs['show_next_prev'] = true;
	$prefs['next_prev_url'] = base_url().'calendar/';
	
    $this->load->library('calendar', $prefs);

    $this->load->view('templates/header', $data);
    $this->load->view('templates/nav');
    $this->load->view($page, $data);
    // echo $this->calendar->generate();
    $this->load->view('templates/footer');

	}
}