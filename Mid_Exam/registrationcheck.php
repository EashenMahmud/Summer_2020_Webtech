аЯрЁБс                >  ўџ	                               ўџџџ        џџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџ§џџџ            џџџџ      	   
                        ўџџџџџџџџџџџџџџџўџџџџџџџџџџџўџџџ            ўџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџR o o t   E n t r y                                              џџџџџџџџ   	     Р      F                        
      W o r d D o c u m e n t                                                џџџџ                                       1      0 T a b l e                                                         џџџџџџџџ                                       x      D a t a                                                         
 џџџџџџџџџџџџ                                    ўџџџ        ьЅС 	   PП             Є   KSKSЄ                     1          R                              џџ         џџ         џџ                 Є     r      r  ч      ч      ч      ч      З                                     Ы                        ч  а  R      R      R      R              R      R      R      R                                             T  $   З  В  i  *   r                     ч      ч                      R      R      ч      ч                      ч      ч      R                П   Ы                                            R      Ы      R                                                                                                                                    Ы                                                                                                                      R                                      R                                                                                                                              ч      Ы                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        < ? p h p           s e s s i o n _ s t a r t ( ) ;             i f ( i s s e t ( $ _ P O S T [ ' s u b m i t ' ] ) ) {                   $ n a m e   =   $ _ P O S T [ ' n a m e ' ] ;                  $ e m a i l   =   $ _ P O S T [ ' e m a i l ' ] ;                  $ u s e r N a m e   =   $ _ P O S T [ ' u s e r N a m e ' ] ;                  $ p a s s w o r d   =   (   $ _ P O S T [ ' p a s s w o r d ' ] ) ;                  $ t y p e   =   (   $ _ P O S T [ ' t y p e ' ] ) ;                                      i f ( e m p t y ( $ u s e r N a m e )   | |   e m p t y ( $ e m a i l )   | |   e m p t y ( $ p a s s w o r d ) ) {                          e c h o   " C a n ' t   a c c e p t   n u l l " ;                  } e l s e {                           s e t c o o k i e ( ' n a m e ' ,   $ n a m e ,   t i m e ( ) + 3 6 0 0 ,   ' / ' ) ;                            s e t c o o k i e ( ' e m a i l ' ,   $ e m a i l ,   t i m e ( ) + 3 6 0 0 ,   ' / ' ) ;                          s e t c o o k i e ( ' u s e r N a m e ' ,   $ u s e r N a m e ,   t i m e ( ) + 3 6 0 0 ,   ' / ' ) ;                          s e t c o o k i e ( ' p a s s w o r d ' ,   $ p a s s w o r d ,   t i m e ( ) + 3 6 0 0 ,   ' / ' ) ;                          s e t c o o k i e ( ' t y p e ' ,   $ t y p e ,   t i m e ( ) + 3 6 0 0 ,   ' / ' ) ;                                                    i f ( $ t y p e   = =   ' u s e r ' )                          {                                  $ f i l e   =   f o p e n ( ' u s e r . t x t ' ,   ' w ' ) ;                                  $ u s e r   =   $ u s e r N a m e . " | " . $ p a s s w o r d . " | " . $ e m a i l . " | " . $ t y p e ;                                  f w r i t e ( $ f i l e ,   $ u s e r ) ;                                  f c l o s e ( $ f i l e ) ;                           }                          e l s e {                                  $ f i l e   =   f o p e n ( ' a d m i n . t x t ' ,   ' w ' ) ;                                  $ u s e r   =   $ u s e r N a m e . " | " . $ p a s s w o r d . " | " . $ e m a i l . " | " . $ t y p e ;                                  f w r i t e ( $ f i l e ,   $ u s e r ) ;                                  f c l o s e ( $ f i l e ) ;                          }                           e c h o   " R e g i s t r a t i o n   D o n e . . ! " ;                          / / h e a d e r ( ' l o c a t i o n : l o g i n . h t m l ' ) ;                  }          }           e l s e {                  e c h o   " i n v a l i d   r e q u e s t " ;                  / / h e a d e r ( ' l o c a t i o n : l o g i n . h t m l ' ) ;             }    ? >                                                                                                                                                                                                                                                                                                                                                                 
      8  :  <  |  ~    О  Р      R  T  Ј  Њ  ю  №  ђ              и  к  і  ј  њ  j	  l	  о	  р	  ^
  `
  о
  р
  N  P  R  j  l  Њ  Ќ  Ц  Ш  &  (  В  Д  ў     <  >  @  Z  \  ~    р  т  l  n  И  К  і  ј        џў§ќћњљјїіѕєѓђё№яюэьыъщшчцхфутсрпонмлкйизжедгвбаЯЮЭЬЫЪЩШЧЦХФУТСРПОНМЛКЙИ                                                                                                                                                   H  f  h  Р  Т  д  ж  р  т  ф  і  ј  6  8                Ђ  Є  џў§ќћњљјїіѕєѓђё№яюэьыч                                                                                                                                                                                                                                                                                                                                                            hК0Ѕ                                                  :  <  ~    Р    T  Њ  №  ђ          к  ј  њ  l	  р	  `
  р
  P  R  l  §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §                                                                            l  Ќ  Ш  (  Д     >  @  \    т  n  К  ј      h  Т  ж  т  ф  ј  8          §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §            §                                                                                Є  §            §                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    / аАаАа0Аа/ Ар=!А "А # $ %А  1h                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                S u m m a r y I n f o r m a t i o n                           ( џџџџ   џџџџ                                        L       D o c u m e n t S u m m a r y I n f o r m a t i o n           8 џџџџџџџџџџџџ                                    $   Ш       X X                                                                                                                            X X                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ўџџџ      	   
                                                                      !   "   #   ўџџџ%   &   '   ўџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџџўџ                      рђљOhЋ +'Гй0           `      h      n         
   Т      Ю      к      т      ъ      ђ                А      R e d m i   N o t e   7   P r o         R e d m i   N o t e   7   P r o   @           @   `wу<biж                           W P S   O f f i c e                                                                            ^  `ёџђџ^            N o r m a l      d ЄШ , CJ mH	sH	nHtH_HOJ PJ QJ ^J  aJ                   T A`ђџёџT            D e f a u l t   P a r a g r a p h   F o n t    OJ PJ QJ ^J  f i`ѓџѓџf            T a b l e   N o r m a l     :V і  4ж 
l 4ж   aі     OJ PJ QJ ^J  ( k`єџёџ(            N o   L i s t                R              Є  	   
      l    Є               R                      х           К0Ѕ    g  џ* рAx Р	       џ      T i m e s   N e w   R o m a n   T i m e s   N e w   R o m a n   C                       S y m b o l   S y m b o l   ?&  џ* рCx Р	       џ      A r i a l   A r i a l   G&  џ сџЌ @	             C a l i b r i   C a l i b r i   ;z       (             S i m S u n   [SO  [                                  C a m b r i a   M a t h   C a m b r i a   M a t h       №а  h    1' №ќп                                               ! №        ! % ) , . : ; > ? ] } Ђ Ј А З ЧЩ    & 0 2 3 : !6"000	000000006ў:ў>ў@ўDўZў\ў^ўџџџџ	џџџџџџ=џ@џ\џ]џ^џрџ                                                                            $ ( [ { Ѓ Ѕ З   0
0000000Yў[ў]ўџџџ;џ[џсџхџ                                                  Д Д  0                                                                                                 №  ќ§                               )№џ $P  Ј  џџџџџџџџџџџџџџџџџџџџџ'*     02                    !                                                                 џџ                                         №      №                      №    №         №0    №(    	№                    
№          №>    
№        3 №   П   џ   ?  # "ё         џ@                                       ўџ  
                    еЭе. +,љЎ0      	      P      X      `      h      p      x                                                                                                                                            