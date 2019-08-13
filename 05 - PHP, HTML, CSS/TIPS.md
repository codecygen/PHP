Tip
In the php.ini configuration file, you can adjust the include_path setting, 
which dictates where PHP is and is not allowed to retrieve included files.


Tip
As you’ll see in Chapter 9, “Using PHP with MySQL,” any included file that 
contains sensitive information (like database access) should ideally be stored 
outside of the web directory so it can’t be viewed within a browser.

Tip
Since require() has more impact on a script when it fails, it’s recommended 
for mission-critical includes, like those that connect to a database. The 
include() function would be used for less important inclusions.

Tip
If a block of PHP code contains only a single executable statement, it’s common 
to place both it and the PHP tags on a single line: "<?php include('filename.html'); ?>"
