<?php
require_once "Services/Component/classes/class.ilPluginConfigGUI.php";

/**
 * H5P Page Component Config GUI
 */
class ilH5PPageComponentConfigGUI extends ilPluginConfigGUI {

	/**
	 * @param string $cmd
	 */
	function performCommand($cmd) {
		$next_class = $this->ctrl->getNextClass($this);

		switch ($next_class) {
			default:
				$cmd = $this->ctrl->getCmd();

				switch ($cmd) {
					default:
						break;
				}
				break;
		}
	}
}