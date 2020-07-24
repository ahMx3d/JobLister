<?php class Template{
    // Path To Template
    protected $tpl;
    // Variables Passed In
    protected $vars = array();

    // Constructor
    public function __construct($tpl)
    {
        $this->tpl = $tpl;
    }

    public function __get($key)
    {
        return $this->vars[$key];
    }

    public function __set($key, $val)
    {
        $this->vars[$key] = $val;
    }

    public function __toString()
    {
        // Import Vars into Current Table.
        extract($this->vars);
        // Change Directory.
        chdir(dirname($this->tpl));
        // Start Output Buffering
        ob_start();
        // Include Template Base File.
        include basename($this->tpl);

        // Clean Buffer.
        return ob_get_clean();
    }
}