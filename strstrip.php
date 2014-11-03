<?php
static void strstrip(char * s)
{
    if (s==NULL) return ;

    char *last = s + strlen(s);
    char *dest = s;

    while (isspace((int)*s) && *s) s++;
    while (last > s) {
        if (!isspace((int)*(last-1)))
            break ;
        last -- ;
    }
    *last = (char)0;

    memmove(dest, s, last - s + 1);
}
?>
