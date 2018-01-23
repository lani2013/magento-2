<?php


namespace Sharis\CustomAttribute\Plugin\Customer;


class AddressEditPlugin
{

    /**
     * @param \Magento\Customer\Block\Address\Edit $edit
     * @param String $result
     * @return string
     */
    public function afterGetNameBlockHtml(
        \Magento\Customer\Block\Address\Edit $edit,
        $result
    )
    {
        return $result .

            '     <div class="field field-name-lastname required">
                          <label class="label" for="lastname">
                          <span>Custom Attribute</span>

                          </label>

                          <div class="control">
                          <input type="text" id="lastname"
                          name="lastname"
                          value=""
                          title="Custom Attribute"
                          class="input-text required-entry" data-validate="{required:true}">
                             </div>
                          </div> ';

    }
}