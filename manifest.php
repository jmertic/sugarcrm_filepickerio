<?php

/**
Copyright 2012 John Mertic. All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice, this list of
      conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright notice, this list
      of conditions and the following disclaimer in the documentation and/or other materials
      provided with the distribution.

THIS SOFTWARE IS PROVIDED BY JOHN MERTIC ``AS IS'' AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL <COPYRIGHT HOLDER> OR
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

The views and conclusions contained in the software and documentation are those of the
authors and should not be interpreted as representing official policies, either expressed
or implied, of John Mertic.
*/

$manifest = array (
    'acceptable_sugar_versions' => array (
        'regex_matches' => array(
            '6\.[56789]\.\d\w*'
            ),
        ),
    'acceptable_sugar_flavors' => array(
        'CE',
        'PRO',
        'CORP',
        'ENT',
        'ULT',
        ),
    'readme' => '',
    'key' => 'Filepicker.io SugarField',
    'author' => '',
    'description' => 'Filepicker.io SugarField',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'Filepicker.io SugarField',
    'published_date' => '2011-10-03 00:22:07',
    'type' => 'module',
    'version' => '20111003',
    'remove_tables' => false,
    );

$installdefs = array (
    'id' => 'filepickerio',
    'copy' => array (
        array (
            'from' => '<basepath>/include/SugarFields/Fields/Filepickerio/',
            'to' => 'custom/include/SugarFields/Fields/Filepickerio/',
            ),
        array (
            'from' => '<basepath>/modules/DynamicFields/templates/Fields/',
            'to' => 'custom/modules/DynamicFields/templates/Fields/',
            ),
        ),
    'language' => array (
        array (
            'from' => '<basepath>/Language/en_us.filepickerio.php',
            'to_module' => 'ModuleBuilder',
            'language' => 'en_us',
            ),
        ),
    );