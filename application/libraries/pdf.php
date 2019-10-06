<?php 

	use Dompdf\Dompdf;
	class pdf extends Dompdf {
		public $filename;

		public function __construct()
		{
			parent::__construct();
			$this->filename = "Laporan.pdf";
		}

		protected function get(){
			return get_instance();
		}

		public function load_view($view, $data = array()){
			$html = $this->get()->load->view($view,$data, TRUE);
			$this->loadHtml($html);

			$this->render();
			$this->stream($this->filename, array("Attachment" => FALSE));
		}


		public function load_view_siswa($view, $data = array()){
			$html = $this->get()->load->view($view,$data, TRUE);
			$this->loadHtml($html);

			$this->render();
			$this->stream($this->filename, array("Attachment" => FALSE));
		}
	}

?>