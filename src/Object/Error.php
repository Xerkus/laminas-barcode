<?php

/**
 * @see       https://github.com/laminas/laminas-barcode for the canonical source repository
 * @copyright https://github.com/laminas/laminas-barcode/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-barcode/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Barcode\Object;

/**
 * Class for generate Barcode
 *
 * @category   Laminas
 * @package    Laminas_Barcode
 */
class Error extends AbstractObject
{
    /**
     * All texts are accepted
     * @param string $value
     * @return boolean
     */
    public function validateText($value)
    {
        return true;
    }

    /**
     * Height is forced
     * @param bool $recalculate
     * @return integer
     */
    public function getHeight($recalculate = false)
    {
        return 40;
    }

    /**
     * Width is forced
     * @param bool $recalculate
     * @return integer
     */
    public function getWidth($recalculate = false)
    {
        return 400;
    }

    /**
     * Reset precedent instructions
     * and draw the error message
     * @return array
     */
    public function draw()
    {
        $this->instructions = array();
        $this->addText('ERROR:', 10, array(5 , 18), $this->font, 0, 'left');
        $this->addText($this->text, 10, array(5 , 32), $this->font, 0, 'left');
        return $this->instructions;
    }

    /**
     * For compatibility reason
     * @return void
     */
    protected function prepareBarcode()
    {
    }

    /**
     * For compatibility reason
     * @return void
     */
    protected function checkSpecificParams()
    {
    }

    /**
     * For compatibility reason
     * @return void
     */
    protected function calculateBarcodeWidth()
    {
    }
}
