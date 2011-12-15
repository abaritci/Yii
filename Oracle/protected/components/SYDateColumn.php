<?php

Yii::import('zii.widgets.grid.CDataColumn');

class SYDateColumn extends CDataColumn
{

	/**
	 * if filter is false then no show filter
	 * else if filter is 'range' string then show from input to input
	 * else if filter is 'single' string then show input
	 * @var mixed 
	 */
	public $filter='range';
	
	public $language = false;
	
	/**
	 * jquery-ui theme name
	 * @var string
	 */
	public $theme = 'base';
	
	public $fromText = 'From: ';
	
	public $toText = 'To: ';
	
	public $dateFormat = 'yy-mm-dd';
	
	public $dateInputStyle="width:70%";
	
	public $dateLabelStyle="width:30%;display:block;float:left;";
	
	public $dateOptions = array();

	/**
	 * Renders the filter cell content.
	 */
	protected function renderFilterCellContent()
	{
		if($this->filter!==false && $this->grid->filter!==null && $this->name!==null && strpos($this->name,'.')===false)
		{
			
			$cs=Yii::app()->getClientScript();
			$cs->registerCssFile($cs->getCoreScriptUrl().'/jui/css/'. $this->theme .'/jquery-ui.css');
			if ($this->language!==false) {
				$cs->registerScriptFile($cs->getCoreScriptUrl().'/jui/js/jquery-ui-i18n.min.js');
			}
			$cs->registerScriptFile($cs->getCoreScriptUrl().'/jui/js/jquery-ui.min.js');
			
			if ($this->filter=='range') {
				echo CHtml::tag('div', array(), "<span style='". $this->dateLabelStyle ."'>". $this->fromText ."</span>" . CHtml::activeTextField($this->grid->filter, $this->name.'_range[from]', array('style'=>$this->dateInputStyle, 'class'=>'filter-date')));
				echo CHtml::tag('div', array(), "<span style='". $this->dateLabelStyle ."'>". $this->toText ."</span>". CHtml::activeTextField($this->grid->filter, $this->name.'_range[to]', array('style'=>$this->dateInputStyle, 'class'=>'filter-date')));
			}
			else {
				echo CHtml::tag('div', array(), CHtml::activeTextField($this->grid->filter, $this->name.'_range[to]', array('class'=>'filter-date')));
			}
			$options=CJavaScript::encode($this->dateOptions);

			if ($this->language!==false) {
$js=<<<EOD
$(filter_date).datepicker(jQuery.extend({dateFormat:'{$this->dateFormat}'}, jQuery.datepicker.regional['{$this->language}'], {$options}));
EOD;
			}
			else {
$js=<<<EOD
$(filter_date).datepicker(jQuery.extend({dateFormat:'{$this->dateFormat}'}, {$options}));
EOD;
			}
$js=<<<EOD
	var filter_date='#{$this->grid->id} input[class="filter-date"]';
	$('body').delegate(filter_date, 'mousedown', function(){
	{$js}
	});
EOD;

			$cs->registerScript(__CLASS__, $js);
	}
		else
			parent::renderFilterCellContent();
	}

}
