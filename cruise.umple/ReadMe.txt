cruise.umple is the core directory for the source code of the Umple compiler and related model-oriented development technology

Items marked *** are created by the build process only and are not version controlled.
They are referenced here so that people can better understand the hierarchy of files whether or not they have built the system. Never modify these files and never commit
them to version control.

To learn more about key files in this directory, see http://architecture.umple.org

Items marked *** are generated by the build process, and are not version controlled.

Subdirectories:

    bin ***
      Contains .class files as produced by Java, plus some other data files that
      are copied over from other directories.
      
    src
      Umple code for Umple plus some files in other formats such as .grammar
      containing the grammar of Umple and .error containing descriptions of
      various types of error messages to be generated.
      IMPORTANT: Umple is written in itself. Add new files here
      and give them .ump suffices
      Note that much functionality is split into two files
         xx.ump   - the model (independent of destination programming language)
         xx_ code.ump   - methods written in Java that accesses the model API
      This is the most important directory in the system.
    
    
    src-gen-jet ***
       Code generated by UmpleTL for the code generators, copied here by build scripts
           For the source used to generate these see ../UmpleTo*/UmpleTLTemplates/*.ump
       Code here should never be manually modified. Code here, however, must be updated whenever UmpleTL code
       is updated in umpleTo*/UmpleTLTemplates/*.ump Note also that files are also found in umpleTo*/src
       during the compilation process
       Note that this logically should be called src-gen-UmpleTL and may be renamed that soon
           
    src-gen-umple ***
       Code generated by by Umple itself for Umple. Never to be modified manually.

    src-uigu2
       Default code for the User Interface Generator for Umple, to be copied to
        the .jar package (in cruise.umple.compiler.uigu2.files) at compile time.

    test
       All the unit tests for Umple

