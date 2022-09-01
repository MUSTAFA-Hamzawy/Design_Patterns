<?php


namespace DesignPatterns\Creational\AbstractFactory;


class GUIFactory
{
  public AbstractFormFactory $form;

  /**
   * GUIFactory constructor.
   * @param AbstractFormFactory $form
   */
  public function __construct(AbstractFormFactory $form)
  {
    $this->form = $form;
  }

}