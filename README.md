# PHPConsoleOutput

Simple PHP console output helper

While using PHPUnit, you may want to output or debug your tests.  
Normal echo/print_r/dump only outputs after PHPUnit's output, if at all.  
Using ConsoleOutput will echo inline with PHPUnits output,  
giving you a bettter context of your output/debugging.  

```
$this->consoleOutput = new ConsoleOutput();

$this->consoleOutput->showWarning('test showWarning');
```
test showWarning (would output as red text)

