/*
    * control flow function: [case]:
        [2] CASE                                            =>> [1] no expression
                WHEN EXPRESSION = VALUE THEN RESULT
                WHEN EXPRESSION > VALUE THEN RESULT
                WHEN EXPRESSION < VALUE THEN RESULT
                ELSE RESULT                                 =>> [**] [ELSE] optional
            END

        [2] CASE EXPRESSION                                 =>> [2] there is expression
                WHEN VALUE THEN RESULT
                WHEN VALUE THEN RESULT
                ELSE RESULT                                 =>> [**] [ELSE] optional
            END AS ...
*/
