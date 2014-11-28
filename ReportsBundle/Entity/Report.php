<?php
// src/Unleashed/ReportBundle/Entity/Report.php
namespace Unleashed\ReportsBundle\Entity;

class Report
{
	protected $reportType;

	protected $dateRange;

	public function getReportType()
	{
		return $this->reportType;
	}

	public function setReportType($reportType)
	{
		$this->reportType = $reportType;
	}

	public function getDateRange()
	{
		return $this->dateRange;
	}

	public function setDateRange(\DateTime $dateRange = null)
	{
		$this->dateRange = $dateRange;
	}
}
?>
